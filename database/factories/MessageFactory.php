<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'receiver_id' => $this->faker->numberBetween(1, 10),
            'sender_id' => $this->faker->numberBetween(1, 10),
            'message' => 'message'
        ];
    }
}
