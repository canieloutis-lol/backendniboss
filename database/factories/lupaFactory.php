<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class LupaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(20, true),
            'hobby' => fake()->word(22, true),
            'age' => fake()->numberBetween(0, 50),
            'adresss' => fake()->numberBetween(1, 100),
        ];
    }
}
