<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Date;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Provider;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Miftah',
            'email' => 'Miftah@gmail.com',
            'password' => "Miftah",
            'date' => Provider::class()->today("GMT"),
        ]);

        
    }
}
