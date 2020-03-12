<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status','authority'
    ];

    protected $attributes = [
        'status' => 1
    ];
    protected $authorityAttributes = [
        'authority' => 1
    ];

    public function getStatusAttribute($attributes)
    {
        return $this->statusOptions()[$attributes];
    }

    public function getAuthorityAttribute($authorityAttributes)
    {
        return $this->authorityOptions()[$authorityAttributes];
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function statusOptions()
    {
        return [
            1 => 'approved',
            0 => 'unapproved',
        ];
    }

    public function authorityOptions()
    {
        return [
            2 => 'participant',
            1 => 'admin',
            0 => 'organizer',
        ];
    }
    public function challenges()
    {
        return $this->belongsToMany(Challenge::class)->withPivot('code');
    }
}
