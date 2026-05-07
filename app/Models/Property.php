<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User     ;
use App\Models\PropertyType;
use App\Models\PropertyAddress;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    protected $fillable = [
        'author_id',
        'property_type_id',
        'title',
        'description',
        'title_deeds',
        'leasehold_property',
        'bedrooms',
        'bathrooms',
        'build',
        'plot',
        'plot_description',
        'agent_id',
        'year_of_construction',
        'pool',
        'pool_description',
        'listing_type',
        'plan_zone',
        'sea_view',
        'for_sale_board',
        'date_available'
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

    // public function details(): HasOne
    // {
    //     return $this->hasOne(PropertyDetail::class);
    // }

    public function price(): HasOne
    {
        return $this->hasOne(PropertyPrice::class, 'property_id');
    }

    public function media(): HasMany
    {
        return $this->hasMany(PropertyMedia::class);
    }
    
    public function rooms(): HasOne
    {
        return $this->hasOne(PropertyDetailRoom::class);
    }

    public function networks(): HasMany
    {
        return $this->hasMany(PropertyNetworks::class);
    }
}