<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid(): void
    {
        static::creating(fn (Model $model) => $model->uuid = Str::uuid()->toString());

        // static::creating(function (Model $model) {
        //     return $model->uuid = Str::uuid()->toString();
        // });
    }
}
