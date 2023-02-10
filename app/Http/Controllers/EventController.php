<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index(Request $request)
    {
        $filters = $request->all('search');

        $events = EventResource::collection(auth()->user()->events()
                    ->with('user')
                    ->filter($filters)
                    ->latest()
                    ->paginate(30));
        return inertia('Guest/Event/Index', compact('events'));
    }

    
    public function create()
    {
        return inertia('Guest/Event/Create');
    }

    
    public function store(Request $request)
    {
        $code = "";
        for ($i = 0; $i < 6; $i++) {
            $random = rand(0, 35);
            if ($random < 10) {
            $code .= strval($random);
            } else {
            $code .= chr(ord('A') + $random - 10);
            }
        }

        $validated = $request->validate([
            'name' => 'required|max:50',
            'num_guests' => 'nullable|min:1',
            'notes' => 'max:200',
        ]);

       Event::create($validated + [
        'user_id' => auth()->id(),
        'code_event' => $code,
    ]);
        
        request()->session()->flash('flash.banner', 'Se ha programado tu visita');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('guest-events.index');
    }

    
    public function show(Event $event)
    {
        //
    }

   
    public function edit($event_id)
    {
        $event = Event::find($event_id);
        return inertia('Guest/Event/Edit',compact('event'));
    }

    
    public function update(Request $request, $event_id)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'num_guests' => 'nullable|min:1',
            'notes' => 'max:200',
        ]);

        $event = Event::find($event_id);
        $event->update($validated);
        
        request()->session()->flash('flash.banner', 'Se ha actualizado tu evento');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('guest-events.index');
    }

    
    public function destroy($event_id)
    {
        $event = Event::find($event_id);
        $event->delete();
        request()->session()->flash('flash.banner', '¡Se ha eliminado correctamente!');
        request()->session()->flash('flash.bannerStyle', 'success'); 
        return redirect()->route('guest-events.index');
    }
}



