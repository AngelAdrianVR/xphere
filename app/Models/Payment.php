<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payed_at',
        'expired_date',
        'amount',
        'description',
        'concept',
        'status',
        'user_id',
    ];

    protected $dates = [
        'payed_at',
        'expired_date',
    ];
}
