<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public $count = 0;

    public function definition()
    {
        return [
            'slug' => 'slug' . $this->count,
            'title' => 'title' . $this->count,
            'description' => 'description' . $this->count++,
            'image_path' => $this->faker->randomElement([
                '644bc54fd6861-Hello.jpg',
                '644bcdb767611-Hello.jpg',
                '6034f2b4ac8f1-This is my title.jpg',
                '64463ba655fe1-Hello !!.png',
                '64464d8124a88-Hello !.png',
                '64465018eda73-Test.jpg',
                ]),
            'user_id' => $this->faker->numberBetween(1, 10),
            'draft' => false

        ];
    }
}
