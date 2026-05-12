<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'category', 'first_name', 'last_name', 'email', 'phone_number', 'mobile_number',
    'mobile_number', 'type', 'source', 'notes', 'lawyer_first_name', 'lawyer_last_name',
    'lawyer_email', 'lawyer_phone_number', 'lawyer_address'
])]
class PropertyContactDocument extends Model
{
    public function properties(): BelongsTo
    {
        return $this->belongsTo(PropertyContactDetail::class, "property_contact_detail_id");
    }
}
