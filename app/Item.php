<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'calories'];

    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
}
