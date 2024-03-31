<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 100) as $index) {
            DB::table('produits')->insert([
                'codebarre' => fake()->numberBetween(10000, 99999),
                'designation' => fake()->word,
                'quantite' => fake()->randomFloat(2, 0, 100),
                'prix_ht' => fake()->randomFloat(2, 0, 100),
                'tva' => fake()->randomFloat(2, 0, 20),
                'description' => fake()->sentence,
                'image' => fake()->imageUrl(),
                'sous_famille_id' => fake()->numberBetween(1, 3), // Assuming 3 sub-families exist
                'marque_id' => fake()->numberBetween(1, 3), // Assuming 3 brands exist
                'unite_id' => fake()->numberBetween(1, 3), // Assuming 3 units exist
            ]);
        }
    }
}
