<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

class EcopontoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->phone(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'created_by_id' => null
        ];
    }
}
