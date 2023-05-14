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
            'slug' => 'slug'.$this->count,
            'title' => 'title'.$this->count,
            'description' => 'description'.$this->count++,
            'image_path' => 'profiles/defaultPicture.png',
            'user_id' => $this->faker->numberBetween(1, 10),
            'draft' => false

        ];
    }
}
