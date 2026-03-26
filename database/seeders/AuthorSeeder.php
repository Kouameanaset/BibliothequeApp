<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/**
 * Seeder pour générer des auteurs fictifs.
 *
 * Ce seeder utilise une factory pour créer :
 * - 10 auteurs avec des données générées automatiquement (Faker)
 *
 * Les données incluent :
 * - prénom
 * - nom
 * - biographie
 * - date de naissance
 */
class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::factory()
            ->count(10)
            ->create();
    }
}
