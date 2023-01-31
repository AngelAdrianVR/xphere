<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'description',
        'is_solved',
        'user_id',
        'sphere_id',
    ];

    //relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sphere()
    {
        return $this->belongsTo(Sphere::class);
    }
}
