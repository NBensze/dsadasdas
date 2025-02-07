<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planet>
 */
class PlanetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'destination' => fake()->randomElement(["A1", "A2", "A3", "A4", "A5", "A6", "A7", "A8", "A9", "A10"]),
            'price' => $this->faker->numberBetween(10000,50000),
            'departure' => $this->faker->dateBetween(2020, 2025),
        ];
    }
}
