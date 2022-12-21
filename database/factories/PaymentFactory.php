<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'payed_at' => $this->faker->date(),
            'expired_date' => $this->faker->date(),
            'amount' => $this->faker->numberBetween(300,1200),
            'description' => $this->faker->text(50),
            'concept' => $this->faker->word(),
            'status' => $this->faker->numberBetween(1,4),
            'user_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
