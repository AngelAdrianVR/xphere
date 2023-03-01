<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationFacilityRequest;
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
        $my_next_reservations = ReservationFacility::where('user_id', auth()->id())
            ->whereDate('event_start', '>', today())
            ->get();

        return Inertia::render('ReservationFacilities/Index', compact('facilities', 'my_next_reservations'));
    }

  
    public function create()
    {
        // $facility = Facility::find($facility_id);
        // return $facility;
        // return inertia('ReservationFacilities/Create');
    }

  
    public function store(StoreReservationFacilityRequest $request)
    {
        ReservationFacility::create($request->validated() + ['user_id' => auth()->id()]);

        request()->session()->flash('flash.banner', 'Se ha hecho la reservacion correctamente');
        request()->session()->flash('flash.bannerStyle', 'success');

        return to_route('reservation-facilities.index');
    }

 
    public function show($facility_id)
    {
        $facility = Facility::find($facility_id);
        $raw_markers = ReservationFacility::where('facility_id', $facility_id)
            ->whereDate('event_start', '>', today())
            ->get();
        
        return inertia('ReservationFacilities/Create', compact('facility', 'raw_markers'));
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
