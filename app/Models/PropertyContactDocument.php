<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyContactDocument extends Model
{
    public function properties(): BelongsTo
    {
        return $this->belongsTo(PropertyContactDetail::class, "property_contact_detail_id");
    }
}
