<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class unitbisnisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('unitbisnis')->insert([
            [
                'name' => 'Marketing & Digital Product Incubation',
            ],
            [
                'name' => 'Operation & Managed Service',
            ],
            [
                'name' => 'Operation Kantor Pusat',
            ],
            [
                'name' => 'Project Solution & Delivery Regional V',
            ],
            ]);
    }
}
