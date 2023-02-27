<?php

namespace App\Http\Controllers;

use App\Models\Coment;
use Illuminate\Http\Request;

class ComentController extends Controller
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
            'message' => 'required',
            'post_id' => 'required',
        ]);

        Coment::create($request->all() +['user_id' => auth()->id()]);

        return redirect()->route('neighborhood.show', $request->post_id);
        
    }

  
    public function show(Coment $coment)
    {
        //
    }

    
    public function edit(Coment $coment)
    {
        //
    }


    public function update(Request $request, Coment $coment)
    {
        //
    }

    
    public function destroy(Coment $coment)
    {
        //
    }
}
