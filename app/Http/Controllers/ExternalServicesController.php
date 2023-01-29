<?php

namespace App\Http\Controllers;

use App\Models\ExternalServices;
use Illuminate\Http\Request;

class ExternalServicesController extends Controller
{

    public function index()
    {
        $sphere_id = auth()->user()->sphere_id;
        $external_services = ExternalServices::where('sphere_id', $sphere_id)->get();
        return inertia('Services/External/Index',compact('external_services'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(ExternalServices $externalServices)
    {
        //
    }

    
    public function edit(ExternalServices $externalServices)
    {
        //
    }

    
    public function update(Request $request, ExternalServices $externalServices)
    {
        //
    }

    
    public function destroy(ExternalServices $externalServices)
    {
        //
    }
}
