<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Distribution extends Model
{
    /** @use HasFactory<\Database\Factories\DistributionFactory> */
    use HasFactory;

    protected $fillable = [
        'person_id',
        'year',
        'type',
        'amount',
        'status',
    ];
    protected $keyType = 'string';
    public $incrementing = false;

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public static function booted(): void
    {
        static::creating(function ($model) {
            $model->id = (string) Str::orderedUuid();
        });
    }
}
