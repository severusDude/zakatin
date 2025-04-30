<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];
    protected $keyType = 'string';
    public $incrementing = false;

    public static function booted()
    {
        static::creating(function ($model) {
            $model->id = (string) Str::orderedUuid();
        });
    }
}
