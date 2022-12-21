<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationFacility extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_start',
        'event_end',
        'status',
        'notes',
        'reservation_date',
        'user_id',
        'facility_id',
    ];

    protected $dates = [ 
        'reservation_date',
    ];
}
