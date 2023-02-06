<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|max:70',
            'description' => 'required',
        ]);

        Suggestion::create($request->all() + ['sphere_id' => auth()->user()->sphere_id]);

        request()->session()->flash('flash.banner', 'Se ha enviado tu sugerencia');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('general.suggestions');
    }

    
    public function show(Suggestion $suggestion)
    {
        //
    }

    
    public function edit(Suggestion $suggestion)
    {
        //
    }

    public function update(Request $request, Suggestion $suggestion)
    {
        //
    }

    
    public function destroy(Suggestion $suggestion)
    {
        //
    }
}
