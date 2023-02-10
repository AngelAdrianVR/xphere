<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_active',
        'location',
        'description',
        'capacity',
        'cost',
        'hours_available',
        'sphere_id',  
    ];
    
    //relationships
    public function sphere()
    {
        return $this->belongsTo(Sphere::class);
    }

    public function reservations()
    {
        return $this->hasMany(ReservationFacility::class);
    }
}
