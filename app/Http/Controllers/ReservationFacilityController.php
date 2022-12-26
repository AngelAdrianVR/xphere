<?php

namespace App\Http\Controllers;

use App\Models\ReservationFacility;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReservationFacilityController extends Controller
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
    public function index()
    {
        return Inertia::render('ReservationFacilities/Index');
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
