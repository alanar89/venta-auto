<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarFeatures extends Model
{
    protected $primaryKey = 'car_id';
    protected $fillable = [
        'car_id',
        'abs',
        'air_conditioning',
        'power_windows',
        'power_doors_locks',
        'cruise_control',
        'bluetooth_connectivity',
        'gps_navigation',
        'heated_seats',
        'rear_parking_sensors',
        'leather_seats',
    ];

    public function car(): BelongsTo // relacion muchos a uno
    {
        return $this->belongsTo(Car::class);
    }
}