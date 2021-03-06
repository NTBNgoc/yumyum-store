<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Role extends Model
{
    protected $fillable = [
        'name',
    ];

    public function users() {
        return $this->hasMany(User::class);
    }
}
