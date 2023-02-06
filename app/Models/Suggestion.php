<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'description',
        'sphere_id',
    ];

    //relationships
    public function sphere()
    {
        return $this->belongsTo(Sphere::class);
    }
}
