<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory pour générer des auteurs fictifs.
 *
 * Cette factory utilise Faker pour créer :
 * - un nom de famille
 * - un prénom
 * - une biographie
 * - une date de naissance
 *
 * @extends Factory<Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'last_name' => fake()->lastName(),
            'first_name' => fake()->firstName(),
            'biography' => fake()->paragraph(),
            'birth_date' => fake()->date(),
        ];
    }
}
