<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalServices extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'description',
        'website',
        'social_networks',
    ];

    //relationships
    public function sphere()
    {
        return $this->belongsTo(Sphere::class);
    }
}
