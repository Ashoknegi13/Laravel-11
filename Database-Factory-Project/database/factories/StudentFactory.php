<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'name'=>fake()->name(),
             'age'=>fake()->numberBetween(18,80),   // define min. age and max. age
             'email'=>fake()->unique()->email(),
             'address'=>fake()->address(),
             'city'=>fake()->city(),
             'phone'=>fake()->phoneNumber(),
             'password'=>fake()->password()

        ];
    }
}
