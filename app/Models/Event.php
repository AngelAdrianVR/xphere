<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable =[
        'num_guests',
        'name',
        'code_event',
        'notes',
        'user_id',
    ];

    //relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // query scopes
    public function scopeFilter($query, $filters)
    {
        $query->when($filters["search"] ?? null, function ($query, $search) {
            $query->where('name', 'LIKE', "%$search%")
                ->orWhere('created_at', 'LIKE', "%$search%")
                ->orWhere('code_event', 'LIKE', "%$search%")
                ->orWhere('notes', 'LIKE', "%$search%");
        });
    }
}
