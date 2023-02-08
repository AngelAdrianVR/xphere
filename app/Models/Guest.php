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
        'brand_car',
        'notes',
        'guest_type_id',
        'user_id',
    ];

    protected $dates = [
        'arrived_time',
    ];

    //relationships
    public function guestType()
    {
        return $this->belongsTo(GuestType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // query scopes
    public function scopeFilter($query, $filters)
    {
        $query->when($filters["search"] ?? null, function ($query, $search) {
            $query->where('name', 'LIKE', "%$search%")
                ->orWhereHas('guestType', function ($query) use ($search) {
                    $query->where('name', $search);
                })
                ->orWhere('created_at', 'LIKE', "%$search%")
                ->orWhere('plate_car', 'LIKE', "%$search%")
                ->orWhere('brand_car', 'LIKE', "%$search%");
        });
    }
}
