<?php

namespace App\Http\Controllers;

use App\Models\ExternalServices;
use Illuminate\Http\Request;

class ExternalServicesController extends Controller
{

    public function index()
    {
        return inertia('Services/External/Index');
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
