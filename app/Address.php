<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    protected $fillable = [
        'name',
    ];

    public function ward() {
        return $this->belongsTo(Ward::class);
    }

    public function store() {
        return $this->hasOne(Store::class);
    }

    public function oders() {
        return $this->hasMany(Oder::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }
}
