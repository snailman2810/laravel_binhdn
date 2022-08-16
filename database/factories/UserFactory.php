<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Hash;

class UserFactory extends Factory
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
            'mail_address' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('abc'),
            'address' => $this->faker->address(),
            'phone' => str::random(15),
        ];
    }
}
