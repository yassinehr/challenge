<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    //
    // Guarded Example
    protected $guarded = [];

    protected $attributes = [
        'status' => 1
    ];

    public function getStatusAttribute($attribute)
    {
        return $this->statusOptions()[$attribute];
    }

    public function scopeDone($query)
    {
        return $query->where('status', 1);
    }

    public function scopeOngoing($query)
    {
        return $query->where('status', 0);
    }
    public function userInformation($id)
    {
        return User::findOrFail($id);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('code');
    }

    public function statusOptions()
    {
        return [
            1 => 'done',
            0 => 'ongoing',
        ];
    }

    public function getSearchAttribute()
    {
        return "{$this->title} {$this->description} {$this->start} {$this->deadline}";
    }
}
