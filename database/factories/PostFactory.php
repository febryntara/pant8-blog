<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $string = "";
        for ($i = 1; $i <= 10; $i++) {
            if ($i === mt_rand(1, $i)) {
                $string .= "<p>" . $this->faker->paragraph(mt_rand(5, 10)) . "</p>";
            }
        }

        $title = $this->faker->unique()->sentence(mt_rand(2, 8));
        return [
            'category_id' => mt_rand(1, Category::count()),
            'user_id' => mt_rand(1, User::count()),
            'title' => $title,
            'slug' => Str::slug($title),
            'exerpt' => $this->faker->paragraph(1),
            'content' => $string,
        ];
    }
}
