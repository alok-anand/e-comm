<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->word,
            'price'=>fake()->numberBetween($min = 1000, $max = 9000),
            'discription'=>fake()->text,
            'category' =>fake()->word,
            'gallery' =>'dummy.jpg'
        ];
    }
}
