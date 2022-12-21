<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteGuest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'plate_car',
        'notes',
        'guest_type_id',
        'user_id',
        'arrived_at', //timezone not date
    ];
}
