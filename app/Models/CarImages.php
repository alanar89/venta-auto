<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarImages extends Model
{
    protected $fillable = [
        'image_path',
        'position'
    ];
    public function car(): BelongsTo // relacion muchos a uno
    {
        return $this->belongsTo(Car::class);
    }
}