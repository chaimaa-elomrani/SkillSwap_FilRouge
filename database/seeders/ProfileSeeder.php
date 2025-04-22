<?php

namespace Database\Seeders;

use Carbon\Carbon;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profiles = [
            [
                'name' => 'John Doe',
                'title' => 'Senior Developer',
                'bio' => 'Experienced full-stack developer with 8+ years in web application development.',
                'location' => 'San Francisco, CA',
                'phone_number' => '(415) 555-1234',
                'image' => 'https://plus.unsplash.com/premium_photo-1689568126014-06fea9d5d341?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'status' => 'available',
                'user_id' => 1,
                'domain_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jane Smith',
                'title' => 'UX Designer',
                'bio' => 'Creative UX/UI designer focused on creating intuitive user experiences.',
                'location' => 'New York, NY',
                'phone_number' => '(212) 555-6789',
                'image' => 'https://plus.unsplash.com/premium_photo-1690407617686-d449aa2aad3c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'status' => 'Limited Availability',
                'user_id' => 2,
                'domain_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Michael Johnson',
                'title' => 'DevOps Engineer',
                'bio' => 'DevOps specialist with expertise in CI/CD pipelines and cloud infrastructure.',
                'location' => 'Austin, TX',
                'phone_number' => '(512) 555-7890',
                'image' => 'https://images.unsplash.com/photo-1654110455429-cf322b40a906?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'status' => 'unavailable',
                'user_id' => 3,
                'domain_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Emily Chen',
                'title' => 'Data Scientist',
                'bio' => 'Data scientist with strong background in machine learning and statistical analysis.',
                'location' => 'Seattle, WA',
                'phone_number' => '(206) 555-4321',
                'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'status' => 'available',
                'user_id' => 4,
                'domain_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Robert Taylor',
                'title' => 'Product Manager',
                'bio' => 'Product manager with a passion for creating user-centered digital products.',
                'location' => 'Chicago, IL',
                'phone_number' => '(312) 555-9876',
                'image' => 'https://images.unsplash.com/photo-1654110455429-cf322b40a906?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'status' => 'Limited Availability',
                'user_id' => 5,
                'domain_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('profiles')->insert($profiles);
    }
}
