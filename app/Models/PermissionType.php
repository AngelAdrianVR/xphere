<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sphere_id',
    ];

    //relationships
    public function sphere()
    {
        return $this->belongsTo(Sphere::class);
    }

    public function residentPermissions()
    {
        return $this->hasMany(ResidentPermission::class);
    }
}
