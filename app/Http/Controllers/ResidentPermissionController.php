<?php

namespace App\Http\Controllers;

use App\Models\PermissionType;
use App\Models\ResidentPermission;
use Illuminate\Http\Request;

class ResidentPermissionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $sphere_id = auth()->user()->sphere_id;
        $permission_types = PermissionType::where('sphere_id', $sphere_id)->get();
        // return $permission_types;
        return inertia('General/Permissions/Create',compact('permission_types'));
    }

    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'date' => 'required|date|after:'.now()->addDays(7),
            'subject' => 'required|max:50',
            'description' => 'required',
            'permission_type_id' => 'required',
        ]);

        ResidentPermission::create($request->all() + [
            'user_id' => auth()->id(),
        ]);

        request()->session()->flash('flash.banner', 'Se ha enviado tu solicitud de permiso');
        request()->session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('general.permissions');
    }
}
