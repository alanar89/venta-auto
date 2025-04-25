<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    protected $fillable = [
        'name',
        'state_id'
    ];

    public function state(): BelongsTo // relacion muchos a uno
    {
        return $this->belongsTo(State::class);
    }

    public function cars(): HasMany // relacion uno a muchos
    {
        return $this->hasMany(Car::class);
    }
}