<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Store extends Model
{
    protected $fillable = [
        'name',
        'description',
        'phone',
        'avatar',
    ];

    public function address() {
        return $this->belongsTo(Address::class);
    }

    public function foods() {
        return $this->hasMany(Food::class);
    }

    public function oders() {
        return $this->hasMany(Oder::class);
    }
}
