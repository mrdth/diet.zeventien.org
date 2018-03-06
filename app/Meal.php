<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = ['type'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
