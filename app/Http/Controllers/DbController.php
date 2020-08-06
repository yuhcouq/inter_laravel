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
            'email'    => 'required|unique:users|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ], $messages);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);

        } else {
            // Lưu thông tin vào database, phần này sẽ giới thiệu ở bài về database
            $name = $request->name;
            $email = $request->email;
            $password = Hash::make($request->password);
            User::create([
                'name' => $name,
                'email' => $email,
                'password' => $password,
            ]);
            return 'đăng kí thành công';
        }
    }
    public function loginview(){
        if(session('user') != null){
            session()->forget('user');

        }
        return view("login");
    }
    public function login(Request $request){
        $us = User::where('email','=',$request->email)->first();
        if($us != null){
            if(Hash::check($request->input('password'),$us->password)){
                session(['log' => true]);
                session(['user'=> $us->id]);
                return "đăng nhập thành công";
            }
            else{
                return 'mật khẩu hoặc email không đúng';
            }
        }
        else{
              return "đăng nhập không thành công";
        }

    }
    public function success(){
        if(session('user') != null){
            return view('success')->with('message','đăng nhập thành công');
        }
    }
}
