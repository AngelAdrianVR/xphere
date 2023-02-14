<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReservationFacility>
 */
class ReservationFacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'reservation_name' => $this->faker->name(),
            'event_start' => now(),
            'status' => $this->faker->numberBetween(1,4),
            'notes' => $this->faker->word(),
            'user_id' => $this->faker->numberBetween(1,10),
            'facility_id' => $this->faker->numberBetween(1,5),
            ];
    }
}
