<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Post::create(['title' => 'First Post', 'content' => 'This is my first post!', 'postedBy' => 'Test User']);
        User::create(['name' => 'Jack Smith', 'email' => 'test@gmail.com', 'password' => Hash::make('password'), 'is_admin' => 1]);

    }
}
