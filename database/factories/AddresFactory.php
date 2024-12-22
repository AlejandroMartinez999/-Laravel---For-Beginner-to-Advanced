<?php

namespace Database\Factories;

use App\Models\addres;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\addres>
 */
class AddresFactory extends Factory
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
            'address'=>fake()->address(),
            'user_id'=>rand(1,4),
        ];
    }
}
