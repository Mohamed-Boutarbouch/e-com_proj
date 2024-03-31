<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nom' => 'admin',
            'prenom' => 'admin',
            'adresse' => fake()->address,
            'ville' => fake()->city,
            'email' => 'admin@admin',
            'password' => bcrypt('admin123'),
            'tel' => fake()->phoneNumber,
            'is_admin' => true
        ]);
    }
}
