<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalServices extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'sphere_id',
    ];

    //relationships
    public function sphere()
    {
        return $this->belongsTo(Sphere::class);
    }

}
