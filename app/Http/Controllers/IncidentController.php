<?php

namespace App\Http\Controllers;

use App\Models\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|max:100',
            'description' => 'required',
        ]);
        Incident::create($validated + [
            'user_id' => auth()->user()->id,
            'sphere_id' => auth()->user()->sphere_id,
        ]);

        request()->session()->flash('flash.banner', 'Se ha mandado tu reporte');
        request()->session()->flash('flash.bannerStyle', 'success');

        return to_route('general.index');
    }
}
