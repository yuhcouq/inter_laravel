<?php

namespace App\Http\Controllers;
use App\Product;
use App\Shop;
use App\User;
use App\Post;
use Illuminate\Http\Request;

class EloquentController extends Controller
{
    //
    public function add(){
        $shopId = 1;
        $productId = 1;
        $shop = Shop::find($shopId);
        $shop->products()->attach($productId);
    }
    public function add1n(){
        $user = User::find(1);
        $comment = $user->comments()->create([
            'content' => 'A new comment.',
        ]);
    }
    public function addp(){
        $post = Post::find(1);
        $assess = $post->assesses()->create([
            'content' => 'danh gia',
            ]
        );
    }
    public function collection(){
        $user = User::all();
        $us = $user->filter(function ($user){
            return $user->id >= 1;
        });
       // return $us->toJson();
        echo $us->toJson();
    }
}
