<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->word(),
            'model' => $this->faker->word(),
            'plate_car' => 'asdfghjk',
            'color' => $this->faker->colorName(),
            'notes' => $this->faker->word(),
            'user_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
