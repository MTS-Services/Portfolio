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
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'User',
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('user@user.com'),
            'remember_token' => Str::random(10),

            'profession' => fake()->jobTitle(),
            'age' => fake()->numberBetween(18, 60),
            'phone' => '+8801234567890',
            'dob' => fake()->date(),
            'address' => fake()->address(),
            'degree' => fake()->jobTitle(),
            'short_bio' => fake()->sentence(),
            'long_bio' => fake()->paragraph(),
            'designations' => ['Developer', 'Freelancer'],
            'status' => 1,
            'profile_image' => '',
            'cover_image' => '',
            'website_url' => 'https://google.com',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
