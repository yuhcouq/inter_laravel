<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'content'
    ];
    public function Assesses()
    {
        return $this->morphMany('App\Assess', 'object');
    }
    public function users(){
        return $this->belongsTo('App\User');
    }
}
