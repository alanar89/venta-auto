<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Model extends EloquentModel
{
    protected $fillable = [
        'name',
        'maker_id'
    ];

    public function cars(): BelongsTo // relacion uno a muchos
    {
        return $this->belongsTo(Car::class);
    }
}