<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-world', function(){
    return view('hello-world');
});
Route::get('/role',[
    'middleware' => 'role:4',
    'uses' => 'MainController@checkRole',
]);
//cac loai request
Route::get('total/request', 'MainController@uriTest');

//lam viec voi du lieu gui qua request
Route::get('form/view','MainController@formview');
Route::post('form/post','MainController@formpost');

//lam quen voi response
Route::get('/home', function () {
    $type = 'abc';
    $content = 'abcgf';
    return response($content)
        ->header('Content-Type', $type)
        ->header('X-Header-One', 'Header Value')
        ->header('X-Header-Two', 'Header Value');
});
//cooki
Route::get('cooki/view','MainController@showContactForm');
Route::post('cooki/post','MainController@insertMessage');
//template
Route::get("/template",'TemController@templade');
//laravel html
Route::get("/html",'TemController@html');
//query
Route::get("/register",'DbController@registerview');
Route::post("/registerpost",'DbController@register');
//query builder
Route::resource('product', 'ProductController', ['only' => [
    'index', 'create', 'store', 'edit', 'update']]);
