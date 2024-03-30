<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Vegetables',
            'Fresh Berries',
            'Ocean Foods',
            'Butter & Eggs',
            'Fastfood',
            'Fresh Meat',
            'Fresh Onion',
            'Papaya & Crisps',
            'Oatmeal'
        ];

        foreach ($categories as $category) {
            DB::table('familles')->insert([
                'libelle' => $category,
                'image' => 'assets/images/megamenu/thumb-03.jpg'
            ]);
        }
    }
}
