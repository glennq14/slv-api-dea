<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;
use App\Models\PropertyType;
use App\Models\PropertyAddress;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    protected $fillable = [
        
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function property_type(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function address(): HasOne
    {
        return $this->hasOne(PropertyAddress::class);
    }

    public function price(): HasOne
    {
        return $this->hasOne(PropertyPrice::class, 'property_id');
    }
    
    public function amenities(): HasOne
    {
        return $this->hasOne(PropertyAddress::class);
    }

    public function constact(): HasOne
    {
        return $this->hasOne(PropertyAddress::class);
    }

    public function media(): HasMany
    {
        return $this->hasMany(PropertyMedia::class);
    }

    public function floorPlan(): HasMany
    {
        return $this->HasMany(PropertyFloorPlan::class);
    }
    
    public function keyFeature(): HasMany
    {
        return $this->HasMany(PropertyKeyFeature::class);
    }

    public function video(): HasMany
    {
        return $this->hasMany(PropertyVideo::class);
    }

    public function networks(): HasMany
    {
        return $this->hasMany(PropertyNetworks::class);
    }
}