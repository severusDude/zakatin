<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Person extends Model
{
    /** @use HasFactory<\Database\Factories\PersonFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'persons';
    protected $fillable = ['name', 'description', 'category_id', 'family_id'];
    protected $keyType = 'string';
    public $incrementing = false;

    protected $dates = ['deleted_at'];

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

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function distributions()
    {
        return $this->hasMany(Distribution::class);
    }

    public function scopePayer(Builder $query): void
    {
        $query->where('category_id', 1);
    }

    public function scopeRecipient(Builder $query): void
    {
        $query->whereNot('category_id', 1);
    }

    public static function booted(): void
    {
        static::creating(function ($model) {
            $model->id = (string) Str::orderedUuid();
        });
    }
}
