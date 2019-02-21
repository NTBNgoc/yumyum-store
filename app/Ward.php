<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ward extends Model
{
    protected $fillable = [
        'name',
    ];

    public function district() {
        return $this->belongsTo(District::class);
    }

    public function addresses() {
        return $this->hasMany(Address::class);
    }
}
