<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class custommerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('custommer')->insert([
            [
                'name' => 'Subsidiary Afiliasi',
            ],
            [
                'name' => 'Telkom',
            ],
            [
                'name' => 'Kosong',
            ],
            ]);
    }
}
