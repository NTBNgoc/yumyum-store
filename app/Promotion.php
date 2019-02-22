<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Promotion extends Model
{
    protected $fillable = [
        'discount',
        'star_date',
        'end_date',
    ];

    public function foods() {
        return $this->hasMany(Food::class);
    }
}
