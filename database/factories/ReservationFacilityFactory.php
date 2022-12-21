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
            'event_start' => $this->faker->numberBetween(1,24),
            'event_end' => $this->faker->numberBetween(1,24),
            'status' => $this->faker->numberBetween(1,4),
            'notes' => $this->faker->word(),
            'reservation_date' => $this->faker->date(),
            'user_id' => $this->faker->numberBetween(1,10),
            'facility_id' => $this->faker->numberBetween(1,5),
            ];
    }
}
