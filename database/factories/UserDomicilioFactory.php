<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user_domicilio>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->unique()->numberBetween(1,100),
            'domicilio' => fake()->streetAddress(),
            'numero_exterior' => fake()->buildingNumber(),
            'colonia' => fake()->streetName(),
            'cp' => fake()->postCode(),
            'ciudad' => fake()->city(),
        ];
    }
}
