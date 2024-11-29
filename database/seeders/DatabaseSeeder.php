<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call other seeders
        $this->call(CuentaSeeder::class);

        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

        // Optionally create some users
        // User::factory(10)->create();
    }
}
