<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  
    public function index()
    {
        $posts = PostResource::collection(Post::with('user')->whereHas('user', function($query) {
            $query->where('sphere_id', auth()->user()->sphere_id);
        })->latest()->paginate(15));

        // return $posts;

        return inertia('Neighborhood/Index', compact('posts'));
    }

   
    public function create()
    {
        return inertia('Neighborhood/Create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50', 
            'content' => 'required' 
        ]);

        Post::create($request->all() + ['user_id' => auth()->id()]);

        request()->session()->flash('flash.banner', 'Se ha publicado tu post');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('neighborhood.index');
    }

 
    public function show(Post $post)
    {
        
        // return $post;
        return inertia("Neighborhood/Show", compact('post'));
    }

    public function edit(Post $post)
    {
        //
    }

 
    public function update(Request $request, Post $post)
    {
        //
    }

 
    public function destroy(Post $post)
    {
        //
    }
}
