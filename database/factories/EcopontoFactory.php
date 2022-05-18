<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'address' => $this->faker->address(),
            'responsible' => $this->faker->name(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
        ];
    }
}
