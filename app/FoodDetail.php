<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FoodDetail extends Model
{
    protected $fillable = [
        //
    ];

    public function food() {
        return $this->belongsTo(Food::class);
    }
}
