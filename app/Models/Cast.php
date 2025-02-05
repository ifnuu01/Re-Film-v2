<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $fillable = [
        'name',
        'biography',
        'birth_date',
        'photo',
    ];

    public function actors()
    {
        return $this->hasMany(Actor::class);
    }
}
