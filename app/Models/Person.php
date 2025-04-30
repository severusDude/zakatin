<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Person extends Model
{
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory;

    protected $table = 'persons';
    protected $fillable = ['name', 'description', 'category_id', 'family_id'];
    protected $keyType = 'string';
    public $incrementing = false;

    public function familyMembers()
    {
        return $this->hasMany(Person::class, 'family_id');
    }

    public function familyHead()
    {
        return $this->belongsTo(Person::class, 'family_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function booted(): void
    {
        static::creating(function ($model) {
            $model->id = (string) Str::orderedUuid();
        });
    }
}
