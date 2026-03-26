<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory pour générer des livres fictifs.
 *
 * Cette factory crée :
 * - un titre
 * - une description
 * - une année de publication
 * - une relation avec un auteur existant
 * - une relation avec une catégorie existante
 *
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'publication_year' => fake()->numberBetween(1950, 2025),
            'author_id' => Author::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
