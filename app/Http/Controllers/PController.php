<?php

namespace App\Http\Controllers;
use DB;
use Validator;
use Illuminate\Http\Request;

class PController extends Controller
{
    //
    public function phantrang(){
        $student = DB::table('Users')->paginate(5);;
        return view('fontend.product.list-student',compact('student'));
    }
}
