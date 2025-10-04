<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        $categories = PostCategory::pluck('id')->all();
        $users = User::pluck('id')->all();

        for ($i = 1; $i <= 20; $i++) {
            Post::create([
                'title' => fake()->sentence(),
                'slug' => fake()->slug(),
                'author' => fake()->name(),
                'content' => fake()->paragraph(10),
                'image' => 'https://picsum.photos/800/400?random=' . rand(1, 10),
                'user_id' => fake()->randomElement($users),
                'post_category_id' => fake()->randomElement($categories),
                'excerpt' => fake()->sentence(),
                'reading_time' => rand(1, 10),
                'gallery' => json_encode([
                    'https://picsum.photos/800/400?random=' . rand(1, 10),
                    'https://picsum.photos/800/400?random=' . rand(11, 20),
                ]),
                'meta_title' => fake()->sentence(),
                'meta_description' => fake()->sentence(),
                'meta_keywords' => 'blog, post',
                'status' => 'published',
                'is_featured' => fake()->boolean(),
                'allow_comments' => true,
                'published_at' => now(),
                'view_count' => rand(0, 1000),
            ]);
        }
    }
}
