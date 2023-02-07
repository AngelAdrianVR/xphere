<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'sphere_id',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // Relationships
    public function sphere()
    {
        return $this->belongsTo(Sphere::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function accesDevices()
    {
        return $this->hasMany(Device::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function reservatedFacilities()
    {
        return $this->hasMany(ReservationFacility::class);
    }

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function favoriteGuests()
    {
        return $this->hasMany(FavoriteGuest::class);
    }

    public function incidents()
    {
        return $this->hasMany(Incident::class);
    }

    public function residentPermissions()
    {
        return $this->hasMany(ResidentPermission::class);
    }
}
