<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Food extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'size',
        'image',
        'rating',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function promotion() {
        return $this->belongsTo(Promotion::class);
    }

    public function stores() {
        return $this->hasMany(Store::class);
    }

    public function oders() {
        return $this->hasMany(Oder::class);
    }

    public function foodDetails() {
        return $this->hasMany(FoodDetail::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function sizes() {
        return $this->hasMany(Size::class);
    }
}
