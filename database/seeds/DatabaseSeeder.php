<?php

use App\Product;
use Illuminate\Database\Seeder;
use App\User;
use App\Comment;
use App\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(User::class, 100)->create();
        factory(Comment::class, 100)->create();
        factory(Post::class, 5)->create();
        factory(Product::class, 5)->create();
    }
}
