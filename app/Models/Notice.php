<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'expired_date',
        'sphere_id',
    ];

    protected $dates = [ 
        'expired_date',
    ];

    //relationships
    public function sphere()
    {
        return $this->belongsTo(Sphere::class);
    }
}
