<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyContactDetail extends Model
{
    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, "property_id");
    }

    public function documents(): HasMany
    {
        return $this->hasMany(PropertyContactDocument::class, 'property_contact_detail_id');
    }
}
