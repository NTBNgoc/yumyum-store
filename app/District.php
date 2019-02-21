<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class District extends Model
{
    protected $fillable = [
        'name',
    ];

    public function province() {
        return $this->belongsTo(Province::class);
    }

    public function wards() {
        return $this->hasMany(Ward::class);
    }
}
