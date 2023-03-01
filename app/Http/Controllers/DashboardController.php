<?php

namespace App\Http\Controllers;

use App\Http\Resources\GuestResource;
use App\Http\Resources\PaymentResource;
use App\Models\Guest;
use App\Models\ReservationFacility;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $sphere = auth()->user()->sphere;
        $user = auth()->user();
        $user_id = auth()->id();
        $guests = GuestResource::collection(Guest::where('user_id', $user_id)->whereNull('arrived_time')->get());
        $pendent_payments = PaymentResource::collection(auth()->user()->payments()->whereNull('payed_at')->with('user')->latest()->get());
        $next_reservations = ReservationFacility::where('user_id', $user_id)
            ->whereDate('event_start', '>', today())
            ->get();

        return inertia('Dashboard', compact('sphere','user','guests','pendent_payments', 'next_reservations'));
    }
}
