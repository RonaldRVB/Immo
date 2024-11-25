<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => 'https://picsum.photos/400/300?random=' . $this->faker->unique()->numberBetween(1, 1000),
            'home_id' => \App\Models\Home::factory(), // Associe chaque image à une maison
        ];
    }
}
