<?php

namespace App\Models;

use App\Models\Person;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'label', 'description'];

    public function persons()
    {
        return $this->hasMany(Person::class);
    }
}
