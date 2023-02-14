<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Incident extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

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
