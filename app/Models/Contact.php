<?php

namespace App\Models;

use App\Enums\PronounsEnum;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes, HasUuid;

    protected $fillable = [
        'uuid', 'title', 'first_name', 'middle_name', 'last_name', 'preferred_name', 'email', 'phone', 'pronouns',
    ];

    protected $casts = [
        // 'pronouns' => PronounsEnum::class
    ];

    public function interactions(): HasMany
    {
        return $this->hasMany(Interaction::class);
    }
}
