<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;

class PersonalServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all user IDs to assign services to existing users
        $userIds = User::pluck('id')->toArray();

        // If no users exist, we can't create personal services
        if (empty($userIds)) {
            $this->command->info('No users found. Please run the user seeder first.');
            return;
        }

        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Professional web development services including custom websites, e-commerce solutions, and web applications using modern frameworks.',
                'user_id' => $userIds[array_rand($userIds)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Graphic Design',
                'description' => 'Creative graphic design services for logos, branding, marketing materials, and digital assets. Custom illustrations and visual identity solutions.',
                'user_id' => $userIds[array_rand($userIds)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Content Writing',
                'description' => 'Professional content writing for blogs, websites, and marketing materials. SEO-optimized content that engages readers and drives traffic.',
                'user_id' => $userIds[array_rand($userIds)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Social Media Management',
                'description' => 'Complete social media management including content planning, creation, scheduling, and engagement. Grow your online presence across all major platforms.',
                'user_id' => $userIds[array_rand($userIds)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'Custom mobile application development for iOS and Android platforms. User-friendly interfaces with powerful backend integration.',
                'user_id' => $userIds[array_rand($userIds)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Photography Services',
                'description' => 'Professional photography for products, events, portraits, and real estate. High-quality images that showcase your business or personal brand.',
                'user_id' => $userIds[array_rand($userIds)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Video Editing',
                'description' => 'Professional video editing services for social media, marketing, and corporate presentations. Creative solutions to make your content stand out.',
                'user_id' => $userIds[array_rand($userIds)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Digital Marketing',
                'description' => 'Comprehensive digital marketing services including SEO, PPC, email marketing, and content strategy. Results-driven campaigns to boost your online presence.',
                'user_id' => $userIds[array_rand($userIds)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('personal_services')->insert($services);
    }
}