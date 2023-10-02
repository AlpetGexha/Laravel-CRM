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
        'uuid', 'user_id', 'name', 'email', 'phone', 'website',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($company) {
            if (auth()->check()) {
                $company->user_id = auth()->id();
            }
        });
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }

    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class, 'company_id');
    }
}
