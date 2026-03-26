<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory pour générer des catégories fictives.
 *
 * Cette factory crée des catégories avec des noms réalistes
 * pour une bibliothèque (ex: Roman, Science, Histoire, etc.).
 *
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
        ];
    }
}
