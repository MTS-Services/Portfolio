<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'dob',
        'website_url',
        'address',
        'degree',
        'status',
        'short_bio',
        'long_bio',
        'designations',
        'profile_image',
        'cover_image',
        'age',
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'designations' => 'array', // ✅ No need to manually JSON-encode in the seeder
            'dob' => 'date',
            'status' => 'boolean',
            'is_verify' => 'boolean', // ✅ Cast as boolean
        ];
    }
}
