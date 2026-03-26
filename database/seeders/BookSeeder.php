<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Seeder pour générer des livres fictifs.
 *
 * Ce seeder utilise une factory pour créer :
 * - 50 livres avec des données générées automatiquement (Faker)
 *
 * Chaque livre est associé à :
 * - un auteur (author_id)
 * - une catégorie (category_id)
 *
 * Ces relations doivent être définies dans la factory.
 */

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()
            ->count(50)
            ->create();
    }
}
