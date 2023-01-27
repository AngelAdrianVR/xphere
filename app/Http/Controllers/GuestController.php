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

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filters = $request->all('search');

        $guests = GuestResource::collection(auth()->user()->guests()->with(['guestType','user'])->filter($filters)
                    ->latest()->paginate(30));

        return Inertia::render('Guest/Index',compact('guests'));
    }

    public function favorite(Request $request)
    {
        $filters = $request->all('search');

        $favorite_guests = FavoriteGuestResource::collection(auth()->user()->favoriteGuests()->with(['guestType','user'])->filter($filters)
                    ->latest()->paginate(30));
                    // return $favorite_guests;
        return Inertia::render('Guest/Favorite',compact('favorite_guests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guest_types = GuestType::all();
        // return $guest_types;
        return Inertia::render('Guest/Create', compact('guest_types'));
    }

    public function createFavorite()
    {
        $guest_types = GuestType::all();
        return Inertia::render('Guest/CreateFavorite', compact('guest_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'notes' => 'max:100',
            'brand_car' => 'nullable|max:100',
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

    public function storeFavorite(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'notes' => 'max:100',
            'brand_car' => 'nullable|max:100',
            'plate_car' => 'nullable|max:8',
        ]);

        FavoriteGuest::create($request->all() + ['user_id'=>auth()->id()]);
        
        request()->session()->flash('flash.banner', 'Se ha creado tu visita en favoritos');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('guest.favorite');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        //
    }

    public function editFavorite(FavoriteGuest $favorite_guest)
    {
        // return $favorite_guest;
        $guest_types = GuestType::all();
        return inertia('Guest/EditFavorite',compact('favorite_guest','guest_types'));
    }

    public function update(Request $request, $guest)
    {
        //
    }

    public function updateFavorite(Request $request, FavoriteGuest $favorite_guest)
    {
        // return $request;
        $validated = $request->validate([
            'name' => 'required|max:50',
            'notes' => 'max:100',
            'brand_car' => 'nullable|max:100',
            'plate_car' => 'nullable|max:8',
        ]);

        $favorite_guest->update($validated);
        
        request()->session()->flash('flash.banner', 'Se ha actualizado tu visita favorita');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('guest.favorite');
    }

   
    public function destroy(Guest $guest)
    {
        $guest->delete();
        request()->session()->flash('flash.banner', '¡Se ha eliminado correctamente!');
        request()->session()->flash('flash.bannerStyle', 'success'); 
        return redirect()->route('guest.index');
    }

    public function destroyFavorite(FavoriteGuest $favorite_guest)
    {
        return $favorite_guest;
        $favorite_guest->delete();
        request()->session()->flash('flash.banner', '¡Se ha eliminado correctamente!');
        request()->session()->flash('flash.bannerStyle', 'success'); 
        return redirect()->route('guest.favorite');
    }
}
