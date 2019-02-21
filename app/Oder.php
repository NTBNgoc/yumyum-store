<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Oder extends Model
{
    protected $fillable = [
        'quantify',
        'price',
    ];

    public function address() {
        return $this->belongsTo(Adress::class);
    }

    public function foods() {
        return $this->hasMany(Food::class);
    }

    public function store() {
        return $this->belongsTo(Store::class);
    }
}
