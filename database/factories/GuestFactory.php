<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'arrived_at' => now()->toTimeString(),
            'plate_car' => 'asdfghjk',
            'notes' => $this->faker->word(),
            'guest_type_id' =>$this->faker->numberBetween(1,5),
            'user_id' =>$this->faker->numberBetween(1,10),
        ];
    }
}
