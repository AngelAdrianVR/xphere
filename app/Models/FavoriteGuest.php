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
