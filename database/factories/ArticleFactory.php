<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'title' => fake()->word(),
                'description' => fake()->paragraph(),
                'price' => fake()->randomFloat(2, 10, 100),
                'category_id' => fake()->numberBetween(1, count(Category::all())),
                'user_id' => fake()->numberBetween(1, count(User::all())),
                'created_at' => now(),
                'updated_at' => now(),
                'is_accepted' => fake()->randomElement([0,1,null]),
        ];
    }
}
