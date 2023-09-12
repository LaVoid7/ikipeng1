<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class portofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portofolio')->insert([
            [
                'name' => 'Project Solution',
            ],
            [
                'name' => 'Property Management',
            ],
            ]);
    }
}
