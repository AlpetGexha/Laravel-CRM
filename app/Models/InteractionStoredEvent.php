<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteractionStoredEvent extends Model
{
    use HasFactory;

    protected $table = 'interaction_stored_events';

    protected $guard = [];

    protected $casts = [
        'event_properties' => 'json',
        'meta_data' => 'json',
    ];
}
