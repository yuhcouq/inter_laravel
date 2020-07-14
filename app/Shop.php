<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{

    public function products(){
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
