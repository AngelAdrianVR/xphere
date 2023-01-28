<?php

namespace App\Http\Controllers;

use App\Models\InternalServices;
use Illuminate\Http\Request;

class InternalServicesController extends Controller
{
  
    public function index()
    {
        return inertia('Services/Internal/Index');
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
