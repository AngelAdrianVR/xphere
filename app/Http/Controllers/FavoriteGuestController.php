<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavoriteGuestResource;
use App\Models\FavoriteGuest;
use App\Models\Guest;
use App\Models\GuestType;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FavoriteGuestController extends Controller
{

    public function index()
    {

        $favorite_guests = FavoriteGuestResource::collection(auth()->user()->favoriteGuests()->with(['guestType','user'])
                    ->latest()->paginate(30));
        return Inertia::render('Guest/Favorite/Index',compact('favorite_guests'));
    }


    public function create()
    {
        $guest_types = GuestType::all();
        return Inertia::render('Guest/Favorite/Create', compact('guest_types'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'notes' => 'max:100',
            'brand_car' => 'nullable|max:100',
            'plate_car' => 'nullable|max:8',
        ]);

        FavoriteGuest::create($request->all() + ['user_id'=>auth()->id()]);
        
        request()->session()->flash('flash.banner', 'Se ha agregado tu visita a favoritos');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('favorite-guests.index');
    }


    public function show(FavoriteGuest $favorite_guest)
    {
        //
    }


    public function edit(FavoriteGuest $favorite_guest)
    {
        $guest_types = GuestType::all();
        return inertia('Guest/Favorite/Edit',compact('favorite_guest','guest_types'));
    }


    public function update(Request $request, FavoriteGuest $favorite_guest)
    {
        // return $favorite_guest;
        $validated = $request->validate([
            'name' => 'required|max:50',
            'notes' => 'max:100',
            'brand_car' => 'nullable|max:100',
            'plate_car' => 'nullable|max:8',
            'guest_type_id' => 'required',
        ]);

        $favorite_guest->update($validated);
        
        request()->session()->flash('flash.banner', 'Se ha actualizado tu visita');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('favorite-guests.index');
    }


    public function destroy(FavoriteGuest $favorite_guest)
    {
        $favorite_guest->delete();
        request()->session()->flash('flash.banner', '¡Se ha eliminado correctamente!');
        request()->session()->flash('flash.bannerStyle', 'success'); 
        return redirect()->route('favorite-guests.index');
    }

    public function programGuest(Request $request)
    {
        // return $request;
        $validated = $request->validate([
            'name' => 'required|max:50',
            'notes' => 'max:100',
            'brand_car' => 'nullable|max:100',
            'plate_car' => 'nullable|max:8',
        ]);

       Guest::create($validated + [
        'user_id'=>auth()->id(),
        'guest_type_id' => $request->guest_type_id,
    ]);
        
        request()->session()->flash('flash.banner', 'Se ha programado tu visita');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('guest.index');
    }
}
