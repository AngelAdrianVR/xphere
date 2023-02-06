<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResidentPermissionResource;
use App\Models\ResidentPermission;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index()
    {
        return inertia('General/Index');
    }

    public function documents()
    {
        return inertia('General/Documents/Index');
    }

    public function guardHouseChat()
    {
        return inertia('General/GuardHouseChat/Index');
    }

    public function reportIncident()
    {
        return inertia('General/ReportIncident/Index');
    }

    public function surveys()
    {
        return inertia('General/Surveys/Index');
    }

    public function permissions()
    {
        $user_id = auth()->id();
        $resident_permissions = ResidentPermissionResource::collection(ResidentPermission::where('user_id', $user_id)->with('permissionType')->get());
        return inertia('General/Permissions/Index', compact('resident_permissions'));
    }

    public function suggestions()
    {
        return inertia('General/Suggestions/Index');
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
