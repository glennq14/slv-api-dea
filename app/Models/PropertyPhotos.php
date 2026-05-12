<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


#[Fillable([
    'property_id', 'type', 'url', 'caption', 'sort_order',
    'photo_update_date'
])]
class PropertyPhotos extends Model
{
    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, "property_id");
    }
}
