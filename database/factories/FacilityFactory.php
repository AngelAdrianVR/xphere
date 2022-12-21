<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'name' => $this->faker->word(),
           'location' => $this->faker->word(),
           'description' => $this->faker->text(50),
           'cost' => $this->faker->numberBetween(500,5000),
           'hours_available' => $this->faker->numberBetween(1,5),
           'sphere_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
