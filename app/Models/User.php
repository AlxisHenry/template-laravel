<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username', # unique, VARCHAR(25) ; unique
        'email', # unique, VARCHAR(255) ; unique
        'email_verified_at', # nullable
        'password', # nullable, VARCHAR(255)
        'first_name', # nullable, VARCHAR(30) ; nullable
        'last_name', # nullable, VARCHAR(30) ; nullable
        'country_code', # nullable, VARCHAR(10) ; nullable
        'city', # nullable, VARCHAR(40) ; nullable
        'address', # nullable, VARCHAR(80) ; nullable
        'country' # nullable, VARCHAR(40) ; nullable
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*
     * Hash password automatically when use create command
     * */
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = Hash::make($password);
    }

}
