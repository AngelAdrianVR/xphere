<?php

namespace App\Http\Controllers;

use App\Http\Resources\FacilityResource;
use App\Models\Facility;
use App\Models\ReservationFacility;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReservationFacilityController extends Controller
{

    public function index()
    {
        $sphere_id = auth()->user()->sphere_id;
        $facilities = FacilityResource::collection(Facility::where('sphere_id', $sphere_id)->get());

        return Inertia::render('ReservationFacilities/Index', compact('facilities'));
    }

  
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
    }

 
    public function show(ReservationFacility $reservationFacility)
    {
        //
    }


    public function edit(ReservationFacility $reservationFacility)
    {
        //
    }


    public function update(Request $request, ReservationFacility $reservationFacility)
    {
        //
    }


    public function destroy(ReservationFacility $reservationFacility)
    {
        //
    }
}
