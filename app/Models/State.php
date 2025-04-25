<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    protected $fillable = [
        'name',
    ];

    public function cities(): HasMany // relacion uno a muchos
    {
        return $this->hasMany(City::class);
    }
}