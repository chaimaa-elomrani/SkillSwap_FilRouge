<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LanguagesSeeder extends Seeder
{
    public function run()
    {
        $languages = [
            'English',
            'French',
            'Arabic',
            'Spanish',
            'German',
            'Italian',
            'Chinese',
            'Japanese',
            'Korean',
            'Portuguese',
            'Russian',
            'Turkish',
            'Hindi',
            'Dutch',
            'Swedish',
        ];

        foreach ($languages as $language) {
            DB::table('languages')->insert([
                'name' => $language,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
