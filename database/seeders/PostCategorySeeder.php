<?php

namespace Database\Seeders;


use App\Models\PostCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostCategorySeeder extends Seeder
{
    public function run()
    {
        foreach (['Tech', 'Lifestyle', 'Travel', 'Food'] as $name) {
            PostCategory::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => fake()->sentence(),
                'image' => 'https://picsum.photos/400/200?random=' . rand(1, 10),
                'meta_title' => $name . ' Meta',
                'meta_description' => fake()->sentence(),
                'meta_keywords' => 'blog, ' . strtolower($name),
                'is_active' => true,
                'sort_order' => rand(1, 10),
            ]);
        }
    }
}
