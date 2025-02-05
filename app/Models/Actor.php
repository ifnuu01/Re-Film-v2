<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'cast_id',
        'film_id',
    ];

    public function cast()
    {
        return $this->belongsTo(Cast::class);
    }

    public function film()
    {
        return $this->belongsTo(Film::class);
    }
}
