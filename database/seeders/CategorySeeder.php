<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Seeder pour générer des catégories fictives.
 *
 * Ce seeder utilise une factory pour créer :
 * - 5 catégories avec des données générées automatiquement (Faker)
 *
 * Chaque catégorie pourra ensuite être associée à plusieurs livres.
 */
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()
            ->count(5)
            ->create();
    }
}
