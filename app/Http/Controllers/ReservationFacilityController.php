<?php

namespace App\Http\Controllers;

use App\Http\Resources\FacilityResource;
use App\Models\Facility;
use App\Models\ReservationFacility;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReservationFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sphere_id = auth()->user()->sphere_id;
        $facilities = FacilityResource::collection(Facility::where('sphere_id', $sphere_id)->get());

        return Inertia::render('ReservationFacilities/Index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ReservationFacility  $reservationFacility
     * @return \Illuminate\Http\Response
     */
    public function show(ReservationFacility $reservationFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ReservationFacility  $reservationFacility
     * @return \Illuminate\Http\Response
     */
    public function edit(ReservationFacility $reservationFacility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ReservationFacility  $reservationFacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReservationFacility $reservationFacility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ReservationFacility  $reservationFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReservationFacility $reservationFacility)
    {
        //
    }
}
