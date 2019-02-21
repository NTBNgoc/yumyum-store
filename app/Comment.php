<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = [
        'content',
        'date',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function food() {
        return $this->belongsTo(Food::class);
    }
}
