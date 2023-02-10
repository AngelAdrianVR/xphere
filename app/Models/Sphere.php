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

    //relationships
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function facilities()
    {
        return $this->hasMany(Facility::class);
    }

    public function notices()
    {
        return $this->hasMany(Notice::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function generalDocuments()
    {
        return $this->hasMany(GeneralDocument::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function internalServices()
    {
        return $this->hasMany(InternalServices::class);
    }

    public function externalServices()
    {
        return $this->hasMany(ExternalServices::class);
    }

    public function incidents()
    {
        return $this->hasMany(Incident::class);
    }

    public function permissionTypes()
    {
        return $this->hasMany(PermissionType::class);
    }

    public function suggestions()
    {
        return $this->hasMany(Suggestion::class);
    }
    
    public function configs()
    {
        return $this->hasMany(Config::class);
    }

}
