<?php

namespace App\Http\Controllers;

use App\Models\Suscruption;
use Illuminate\Http\Request;

class SuscruptionController extends Controller
{
    public function index()
    {
        return inertia('Suscription/Index');
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Suscruption $suscruption)
    {
        //
    }


    public function edit(Suscruption $suscruption)
    {
        //
    }

    
    public function update(Request $request, Suscruption $suscruption)
    {
        //
    }

    
    public function destroy(Suscruption $suscruption)
    {
        //
    }
}
