<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'seller_id' => User::all()->random()->id, 
            'title' => fake()->words(3, true),
            'description' => fake()->sentence(),
            'price' => fake()->numberBetween(3000, 40000),
            'picture' => fake()->imageUrl(),
        ];
    }
}
