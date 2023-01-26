<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'sphere_id',
    ];

    //relationships
    public function shpere()
    {
        return $this->belongsTo(Sphere::class);
    }
}
