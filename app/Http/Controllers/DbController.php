<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use DB;

class DbController extends Controller
{
    public function registerview(){
        return view("register");
    }
    public function register(Request $request){
        //dd($request->all());

        $messages = [
            'required' => 'Trường :attribute bắt buộc nhập.',
            'email'    => 'Trường :attribute phải có định dạng email'
        ];
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:255',
            'email'    => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6',
            'website'  => 'required|url'

        ], $messages);
        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        } else {
            // Lưu thông tin vào database, phần này sẽ giới thiệu ở bài về database
            $name = $request->input('name');
            $email = $request->input('email');
            $password = $request->input('password');
            $website = $request->input('website');

            DB::insert('insert into us (name, email, password, website) values (?, ?, ?, ?)', [$name, $email, $password, $website]);
            return redirect('register')
                ->with('messages', 'Đăng ký thành công.');
        }
    }
}
