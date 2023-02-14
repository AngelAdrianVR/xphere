<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaymentResource;
use App\Models\Payment;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PaymentController extends Controller
{

 
    public function index()
    {
        $payments = PaymentResource::collection(auth()
                    ->user()
                    ->payments()
                    ->whereNull('payed_at')
                    ->whereDate('expired_date', '>', today())
                    ->orWhereNull('expired_date')
                    ->with('user')
                    ->latest()
                    ->get());
        // return $payments;
        return Inertia::render('Payment/Index',compact('payments'));
    }

    public function historyPayment()
    {
        $payments = PaymentResource::collection(auth()->user()->payments()->with('user')->latest()->get());
        // return $payments;
        return Inertia::render('Payment/History',compact('payments'));
    }


    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }


    public function show(Payment $payment)
    {
        //
    }


    public function edit(Payment $payment)
    {
        //
    }


    public function update(Request $request, Payment $payment)
    {
        //
    }

    public function destroy(Payment $payment)
    {
        //
    }
}
