<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WordFactory extends Factory
{
    public function definition(): array
    {
        return [
            'word' => fake()->word(),
            'meaning' => fake()->sentence(),
            'example' => fake()->paragraph(),
            'created_date' => fake()->date(),
            'user_id' => User::factory(),
        ];
    }
}
