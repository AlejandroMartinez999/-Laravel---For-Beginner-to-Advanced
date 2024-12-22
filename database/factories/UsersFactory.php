<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use PharIo\Manifest\Email;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\users>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name'=>fake()->name(),
            'email'=>fake()->unique()->safeEmail(),
            'email_verified_at'=>now(),
            'password'=>bcrypt('password'),
            'remember_token'=>rand(0,1),
        ];
    }
}
