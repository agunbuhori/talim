<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasName
{
    public static function bootHasName()
    {
        static::saving(function ($model) {
            $model->name = ucfirst($model->name);
        });
    }
}
