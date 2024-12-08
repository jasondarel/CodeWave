<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ranks')->insert([
            [
                'name' => 'bronze',
                'minimum_points' => 0,
            ],
            [
                'name' => 'silver',
                'minimum_points' => 200,
            ],
            [
                'name' => 'gold',
                'minimum_points' => 500,
            ],
        ]);
    }
}
