<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Seeder principal de l'application.
 *
 * Ce seeder appelle tous les autres seeders afin de remplir
 * la base de données avec des données de test cohérentes.
 *
 * Ordre d'exécution :
 * 1. Authors
 * 2. Categories
 * 3. Books (dépend des deux précédents)
 */
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AuthorSeeder::class,
            CategorySeeder::class,
            BookSeeder::class,
        ]);
    }
}
