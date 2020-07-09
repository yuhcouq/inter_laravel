<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Temcontroller extends Controller
{
    public function templade(){
        return view("fontend.first-blade-example");
    }
    public function html(){
        return view("fontend.contact");
    }
}
