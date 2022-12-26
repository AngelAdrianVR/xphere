<?php

namespace App\Http\Controllers;

use App\Http\Resources\GuestResource;
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

        $guests = GuestResource::collection(auth()->user()->guests()->with('guestType')->filter($filters)
                    ->latest()->paginate(30));
        return Inertia::render('Guest/Index',compact('guests'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => 'required|max:50',
            'notes' => 'max:100',
        ]);

       Guest::create($request->all() + ['user_id'=>auth()->id()]);
        
        request()->session()->flash('flash.banner', 'Se ha programado tu visita');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('guest.index');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        //
    }
}
