<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    //relationships
    public function guest(){
        return $this->hasMany(Guest::class);
    }

    public function favoriteGuest(){
        return $this->hasMany(FavoriteGuest::class);
    }
}
