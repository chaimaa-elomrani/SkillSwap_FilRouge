<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // We'll run the seeders in the correct order to maintain relationships
        
        // 1. First create users with profiles
        $this->call(UserSeeder::class);
        
        // 2. Then create posts
        $this->call(PostSeeder::class);
        
        // 3. Finally create requests between users for posts
        $this->call(RequestSeeder::class);
    }
}