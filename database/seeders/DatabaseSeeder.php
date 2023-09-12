<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        jenisanggaranSeeder::class,
        custommerSeeder::class,
        portofolioSeeder::class,
        statusSeeder::class,
        unitbisnisSeeder::class,
        procurementSeeder::class
        ]);
    }
}
