<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Home>
 */
class HomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // Exemple : "Beautiful House in Paris"
            'price' => $this->faker->numberBetween(50000, 1000000), // Prix entre 50k et 1M
            'address' => $this->faker->address, // Adresse aléatoire
            'bedrooms' => $this->faker->numberBetween(1, 10), // Nombre de chambres
            'size' => $this->faker->numberBetween(50, 500), // Taille en m²
            'description' => $this->faker->paragraph(3), // 
        ];
    }
}
