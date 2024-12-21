<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
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
            'tittle'=>fake()->sentence(),
            'description'=>fake()->paragraph(),
            'status'=>rand(0,1),
            'publish_date'=>fake()->date(),
            'user_id'=>1,
            'id_category'=>rand(1,3),
            'views'=>rand(0,1000),
        ];
    }
}
