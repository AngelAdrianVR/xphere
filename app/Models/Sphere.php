<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sphere extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'admin_name',
        'email',
        'phone',
        'uid',
    ];
}
