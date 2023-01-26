<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'plate_car',
        'color',
        'notes',
        'user_id',
    ];

    //relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
