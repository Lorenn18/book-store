<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(4),
            'image' => "https://source.unsplash.com/random/640×480",
            'price' => fake()->numberBetween(0, 100),
            'author' => fake()->name(),
            'nombre_pages' =>fake()->numberBetween(0, 100),
            'created_at' => now()
        ];
    }
}
