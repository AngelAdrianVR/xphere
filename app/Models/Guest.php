<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'arrived_at', //timezone not date
        'plate_car',
        'notes',
        'guest_type_id',
        'user_id',
    ];
}
