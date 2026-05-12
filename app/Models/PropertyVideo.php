<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Attributes\Fillable;   
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


#[Fillable([
    'property_id', ''
])]
class PropertyVideo extends Model
{
    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, "property_id");
    }
}
