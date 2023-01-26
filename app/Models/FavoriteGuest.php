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
        'brand_car',
        'guest_type_id',
        'user_id',
        'arrived_time', //timezone not date
    ];

    //relationships
    public function guestType(){
       return $this->belongsTo(GuestType::class);
    }

    public function user(){
       return $this->belongsTo(User::class);
    }
}
