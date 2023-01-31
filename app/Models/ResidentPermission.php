<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'description',
        'permission_type_id',
        'user_id',
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
