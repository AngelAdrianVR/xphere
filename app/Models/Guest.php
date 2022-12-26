<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'arrived_time', //timezone not date
        'plate_car',
        'notes',
        'guest_type_id',
        'user_id',
    ];

    protected $dates = [
        'arrived_time',
    ];

    //relationships
    public function guestType(){
       return $this->belongsTo(GuestType::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    // query scopes
    public function scopeFilter($query, $filters)
    {
        $query->when($filters["search"] ?? null, function($query, $search){
            $query->where('name', 'LIKE', "%$search%")
                  ->orWhere('guest_type', 'LIKE', "%$search%")
                  ->orWhere('created_at', 'LIKE', "%$search%");

        });
    }
}
