<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'replied_at',
        'subject',
        'description',
        'permission_type_id',
        'user_id',
        'is_accepted',
    ];

    protected $dates = [
        'date',
        'replied_at',
    ];

    //relationships
    public function permissionType()
    {
        return $this->belongsTo(PermissionType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
