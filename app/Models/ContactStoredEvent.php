<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactStoredEvent extends Model
{
    use HasFactory;

    protected $guard = [];

    protected $casts = [
        'event_properties' => 'json',
        'meta_data' => 'json',
    ];

    protected $table = 'contact_stored_events';
}
