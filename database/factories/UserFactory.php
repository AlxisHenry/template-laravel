<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        # In this factory we use Faker ( a PHP library that generate fake data)

        return [
            'username' => fake()->unique()->userName(),
            'email' => fake()->unique()->email(),
            'email_verified_at' => now(),
            'password' => fake()->password(8, 255),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'country_code' => fake()->countryCode(),
            'city' => fake()->city(),
            'address' => fake()->address(),
            'country' => fake()->country(),
            'remember_token' => Str::random(10),
        ];

    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
