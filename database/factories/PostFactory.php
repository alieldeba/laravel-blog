<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
    public function definition(): array
    {
        return [
            "title" => fake()->sentence(6),
            "slug" => fake()->unique()->slug(6),
            "desc" => fake()->sentence(30),
            "content" => fake()->paragraph(10),
            "category_id" => Category::factory(),
            "user_id" => User::factory(),
        ];
    }
}
