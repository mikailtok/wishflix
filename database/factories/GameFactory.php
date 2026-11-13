<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'synopsis' => fake()->paragraph(),
            'release_year' => fake()->numberBetween(1995, 2026),
            'rating' => fake()->randomFloat(1, 5, 10),
            'playtime_hours' => fake()->numberBetween(5, 150),
            'cover_url' => 'https://via.assets.so/game.png?id='.fake()->numberBetween(7, 60).'&q=95&w=300&h=450&fit=cover',
            'featured' => false,
            'status' => fake()->randomElement(['released', 'upcoming', 'early_access']),
            'category_id' => Category::factory(),
        ];
    }

    public function featured(): static
    {
        return $this->state(fn (array $attributes) => [
            'featured' => true,
        ]);
    }
}
