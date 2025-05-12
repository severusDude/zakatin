<?php

namespace App\Models;

use App\Models\Person;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'label',
        'description'
    ];

    public function scopePayer(Builder $query)
    {
        $query->where('id', 1);
    }

    public function scopeRecipient(Builder $query)
    {
        $query->whereNot('id', 1);
    }

    public function persons()
    {
        return $this->hasMany(Person::class);
    }
}
