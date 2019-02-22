<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = [
        //
    ];

    public function food() {
        return $this->belongsTo(Food::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
