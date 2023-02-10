<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavoriteGuestResource;
use App\Http\Resources\GuestResource;
use App\Models\FavoriteGuest;
use App\Models\Guest;
use App\Models\GuestType;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GuestController extends Controller
{

    public function index(Request $request)
    {
        $filters = $request->all('search');

        $guests = GuestResource::collection(auth()->user()->guests()->with(['guestType','user'])->filter($filters)
                    ->latest()->paginate(30));

        return Inertia::render('Guest/Index',compact('guests'));
    }


    public function create()
    {
        $guest_types = GuestType::all();
        return Inertia::render('Guest/Create', compact('guest_types'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'notes' => 'max:200',
            'brand_car' => 'nullable|max:50',
            'plate_car' => 'nullable|max:8',
        ]);

        if($request->favorite_guest){
            FavoriteGuest::create($request->all() + ['user_id'=>auth()->id()]);
        }

       Guest::create($request->all() + ['user_id'=>auth()->id()]);
        
        request()->session()->flash('flash.banner', 'Se ha programado tu visita');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('guest.index');
    }


    public function show(Guest $guest)
    {
        //
    }


    public function edit(Guest $guest)
    {
        $guest_types = GuestType::all();
        return inertia('Guest/Edit',compact('guest','guest_types'));
    }


    public function update(Request $request,Guest $guest)
    {
         $validated = $request->validate([
            'name' => 'required|max:50',
            'notes' => 'max:100',
            'brand_car' => 'nullable|max:100',
            'plate_car' => 'nullable|max:8',
            'guest_type_id' => 'required',
            'favorite_guest' => 'boolean',
        ]);

        if($request->favorite_guest){
            FavoriteGuest::create($request->all() + ['user_id'=>auth()->id()]);
        }

        $guest->update($validated);
        
        request()->session()->flash('flash.banner', 'Se ha actualizado tu visita');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('guest.index');
    }

   
    public function destroy(Guest $guest)
    {
        $guest->delete();
        request()->session()->flash('flash.banner', '¡Se ha eliminado correctamente!');
        request()->session()->flash('flash.bannerStyle', 'success'); 
        return redirect()->route('guest.index');
    }

}
