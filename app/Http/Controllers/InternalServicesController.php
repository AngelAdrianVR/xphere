<?php

namespace App\Http\Controllers;

use App\Models\InternalServices;
use Illuminate\Http\Request;

class InternalServicesController extends Controller
{
  
    public function index()
    {
        $sphere_id = auth()->user()->sphere_id;
        $internal_services = InternalServices::where('sphere_id', $sphere_id)->get();
        return inertia('Services/Internal/Index',compact('internal_services'));
    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show(InternalServices $internalServices)
    {
        //
    }

    
    public function edit(InternalServices $internalServices)
    {
        //
    }

    
    public function update(Request $request, InternalServices $internalServices)
    {
        //
    }

   
    public function destroy(InternalServices $internalServices)
    {
        //
    }
}
