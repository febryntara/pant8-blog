<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(30)->create();

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Tech',
            'slug' => 'tech'
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'Travel',
            'slug' => 'travel'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Beauty',
            'slug' => 'beauty'
        ]);

        Post::factory()->count(200)->create();
    }
}
