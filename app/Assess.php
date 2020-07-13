<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assess extends Model
{
    //
    protected $fillable = [
        'content',
    ];
    public function object()
    {
        return $this->morphTo();
    }
}
