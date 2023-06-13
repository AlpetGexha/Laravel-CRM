<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes, HasUuid;

    protected $fillable = [
        'uuid', 'company_id', 'team_id', 'user_id', 'department_id', 'title', 'body', 'deadline', 'status',
    ];

    protected $casts = [
        'deadline' => 'datetime',
    ];

    public function Interaction(): HasMany
    {
        return $this->hasMany(Interaction::class);
    }
}
