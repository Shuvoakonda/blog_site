<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $posts = Post::pluck('id')->all();
        $users = User::pluck('id')->all();
        for ($i = 1; $i <= 50; $i++) {
            Comment::create([
                'post_id' => fake()->randomElement($posts),
                'user_id' => fake()->randomElement($users),
                'content' => fake()->sentence(10),
                'approved' => true,
            ]);
        }
    }
}
