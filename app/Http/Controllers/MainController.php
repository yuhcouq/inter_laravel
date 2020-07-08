<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function checkRole(){
        echo "<br>Bắt đầu với middelware";
    }
    public function uriTest(Request $request){
        echo $request->path();

        if ($request->is('admin/*')) {
            // duong dan path
            echo '<br>Admin path';
        }
        if ($request->is('total/request')) {
            echo '<br>Đường dẫn bạn vừa truy nhập đúng là: ' . $request->path();
        }

        // url
        $url = $request->url();
        echo '<br>Đường dẫn đầy đủ: ' . $url;
        // url full
        $full_url = $request->fullurl();
        echo '<br>Đường dẫn đầy đủ cả query string' . $full_url;

        //lay phuong thuc request
        $method = $request->method();
        if ($request->isMethod('post')) {
            echo '<br>POST request';
        } else {
            echo '<br>GET request';
        }
    }
    public function formview(){
        return view("form");
    }
    public function formpost(Request $request){
        $name    = $request->input('name');
        $title   = $request->input('title');
        $message = $request->input('message');
        return view('form')->with(['success' => 'gửi dữ liệu xong!', 'name' => $name, 'title' => $title, 'message' => $message]);
    }
    //cooki
    public function insertMessage(Request $request){
        $name    = $request->input('name');
        $email   = $request->input('email');
        $title   = $request->input('title');
        $message = $request->input('message');

        // Lưu cookie trong 30 phút
        $minutes = 30;
        $name_cookie = cookie('name', $name, $minutes);
        $email_cookie = cookie('email', $email, $minutes);
        $data = ['success' => 'Bạn đã gửi tin nhắn thành công!'];
        return response()
            ->view('form-cooki', $data, 200)
            ->withCookie($name_cookie)
            ->withCookie($email_cookie);
    }
    public function showContactForm(Request $request){
        $name  = $request->cookie('name');
        $email = $request->cookie('email');
        return view('form-cooki')->with(['name' => $name, 'email' => $email]);
    }
}

