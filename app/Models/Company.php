<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes, HasUuid;

    protected $fillable = [
        'uuid', 'name', 'email', 'phone', 'website',
    ];

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }
}
