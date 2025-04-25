<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'year',
        'price',
        'mileage',
        'address',
        'phone',
        'description',
        'maker_id',
        'model_id',
        'car_type_id',
        'fuel_type_id',
        'user_id',
        'city_id',
        'published_at',
        'deleated_at',
    ];

    public function feactures(): HasOne // relacion uno a uno
    {
        return $this->hasOne(CarFeatures::class);
    }

    public function primaryImage(): HasOne
    {
        return $this->hasOne(CarImages::class)->oldestOfMany('position');
    }

    public function images(): HasMany // relacion uno a muchos
    {
        return $this->hasMany(CarImages::class);
    }

    public function carType(): BelongsTo // relacion muchos a uno
    {
        return $this->belongsTo(CarType::class);
    }

    public function fuelType(): BelongsTo
    {
        return $this->belongsTo(FuelType::class);
    }
    public function maker(): BelongsTo
    {
        return $this->belongsTo(Maker::class);
    }
    public function model(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Model::class);
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function favouriteUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favourite_cars');
    }
}