<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Potion>
 */
class PotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "magical_name" => $this->faker->word(),
            "description" => $this->faker->sentence(),
            "curative" => $this->faker->boolean(),
            "magic_level_required" => $this->faker->numberBetween(1, 50),
        ];
    }
}
