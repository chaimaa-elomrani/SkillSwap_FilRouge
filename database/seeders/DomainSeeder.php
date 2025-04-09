<?php

namespace Database\Seeders;

use App\Models\Domains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Domains::factory()->count(10)->create();
    }
}
