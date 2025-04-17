<?php

namespace Database\Seeders;

use App\Models\Type;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $types =[
        ['name'=>'Digital & Tech'],
        ['name'=>'Creative'],
        ['name'=>'Professional Services'],
        ['name'=>'Lifestyle & Wellness'],
        ['name'=>'Education & Learning'],
        ['name'=>'Specialized Services'],
        ['name'=>'Others'],
       ];
        DB::table('types')->insert($types);
    }
}
