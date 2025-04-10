<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Domains;
use App\Models\Skills;

class DeleteDomainsAndSkillsSeeder extends Seeder
{
    public function run()
    {
        // Optionally delete all skills and domains, or you can fine-tune the deletion
        Skills::truncate(); // This will delete all skill records
        Domains::truncate(); // This will delete all domain records
    }
}
