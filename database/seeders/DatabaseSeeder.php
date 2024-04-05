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
        // seed users and companies
        $this->call([
            UserSeeder::class
        ]);

        $this->call([
            ProviderSeeder::class
        ]);

        $this->call([
            ServiceSeeder::class
        ]);

        $this->call([
            CustomerSeeder::class
        ]);
    }
}
