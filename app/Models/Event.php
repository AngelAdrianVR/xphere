<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable =[
        'num_guests',
        'code_event',
        'notes',
        'user_id',
        'is_active',
    ];

    //relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
