<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Null_;
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
            'password_confirmation' => 'required_with:password|same:password|min:6'

        ], $messages);
        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        } else {
            // Lưu thông tin vào database, phần này sẽ giới thiệu ở bài về database
            $name = $request->input('name');
            $email = $request->input('email');
            $password = Hash::make($request->input('password'));
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => $password,
            ]);
            return view('register')
                ->with('messages', 'Đăng ký thành công.');
        }
    }
    public function loginview(){
        return view("login");
    }
    public function login(Request $request){
        $us = User::where('email','=',$request->input('email'))->first();
        if($us != null){
            if(Hash::check($request->input('password'),$us->password)){
                session(['log' => true]);
                session(['user'=> $us->id]);
                return redirect('success');
            }
            else{
                return view('login')->with('message','mật khẩu hoặc email không đúng');
            }
        }
        else{
            return view('login')->with('message','mật khẩu hoặc email không đúng');
        }

    }
    public function success(){
        if(session('user') != null){
            return view('success')->with('message','đăng nhập thành công');
        }
    }
}
