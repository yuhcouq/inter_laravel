<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function shops()
    {
        return $this->belongsToMany(Shop::class);
    }
    public function assesses()
    {
        return $this->morphMany('App\Assess', 'object');
    }
}
