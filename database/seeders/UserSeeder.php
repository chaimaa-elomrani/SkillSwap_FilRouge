<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('password123'),
                'profile' => [
                    'name' => 'John Doe',
                    'title' => 'Senior Web Developer',
                    'bio' => 'Full-stack developer with 8 years of experience in PHP, Laravel, and JavaScript frameworks.',
                    'location' => 'San Francisco, USA',
                    'phone_number' => '+1 (555) 123-4567',
                    'status' => 'available',
                    'domain_id' => 105, // Assuming Web Development is ID 1
                    'profile_completed' => true,
                ]
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'password' => Hash::make('password123'),
                'profile' => [
                    'name' => 'Jane Smith',
                    'title' => 'Mobile App Developer',
                    'bio' => 'Skilled in React Native and Flutter. Passionate about creating seamless mobile experiences.',
                    'location' => 'New York, USA',
                    'phone_number' => '+1 (555) 987-6543',
                    'status' => 'Limited Availability',
                    'domain_id' => 105, // Assuming Mobile Development is ID 2
                    'profile_completed' => true,
                ]
            ],
            [
                'name' => 'Alex Johnson',
                'email' => 'alexj@example.com',
                'password' => Hash::make('password123'),
                'profile' => [
                    'name' => 'Alex Johnson',
                    'title' => 'Data Scientist',
                    'bio' => 'Specializing in machine learning models and predictive analytics with Python and R.',
                    'location' => 'London, UK',
                    'phone_number' => '+44 20 1234 5678',
                    'status' => 'available',
                    'domain_id' => 105, // Assuming Data Science is ID 3
                    'profile_completed' => true,
                ]
            ],
            [
                'name' => 'Maria Rodriguez',
                'email' => 'maria.r@example.com',
                'password' => Hash::make('password123'),
                'profile' => [
                    'name' => 'Maria Rodriguez',
                    'title' => 'UI/UX Designer',
                    'bio' => 'Creating beautiful and functional user interfaces with a focus on user experience.',
                    'location' => 'Berlin, Germany',
                    'phone_number' => '+49 30 1234 5678',
                    'status' => 'unavailable',
                    'domain_id' => 106, // Assuming UI/UX Design is ID 4
                    'profile_completed' => true,
                ]
            ],
            [
                'name' => 'David Kim',
                'email' => 'davidk@example.com',
                'password' => Hash::make('password123'),
                'profile' => [
                    'name' => 'David Kim',
                    'title' => 'DevOps Engineer',
                    'bio' => 'Experienced in CI/CD pipelines, Docker, Kubernetes, and cloud infrastructure.',
                    'location' => 'Toronto, Canada',
                    'phone_number' => '+1 (416) 123-4567',
                    'status' => 'Limited Availability',
                    'domain_id' => 106, // Assuming DevOps is ID 5
                    'profile_completed' => true,
                ]
            ],
            [
                'name' => 'Sarah Chen',
                'email' => 'sarahc@example.com',
                'password' => Hash::make('password123'),
                'profile' => [
                    'name' => 'Sarah Chen',
                    'title' => 'Cloud Solutions Architect',
                    'bio' => 'AWS certified architect with expertise in serverless architecture and microservices.',
                    'location' => 'Sydney, Australia',
                    'phone_number' => '+61 2 1234 5678',
                    'status' => 'available',
                    'domain_id' => 107, // Assuming Cloud Computing is ID 6
                    'profile_completed' => true,
                ]
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michaelb@example.com',
                'password' => Hash::make('password123'),
                'profile' => [
                    'name' => 'Michael Brown',
                    'title' => 'Cybersecurity Analyst',
                    'bio' => 'Focused on application security, penetration testing, and secure coding practices.',
                    'location' => 'Amsterdam, Netherlands',
                    'phone_number' => '+31 20 123 4567',
                    'status' => 'available',
                    'domain_id' => 108, // Assuming Cybersecurity is ID 7
                    'profile_completed' => true,
                ]
            ],
            [
                'name' => 'Emma Wilson',
                'email' => 'emmaw@example.com',
                'password' => Hash::make('password123'),
                'profile' => [
                    'name' => 'Emma Wilson',
                    'title' => 'Digital Marketing Specialist',
                    'bio' => 'Expert in SEO, content marketing, and social media strategy with proven ROI results.',
                    'location' => 'Barcelona, Spain',
                    'phone_number' => '+34 93 123 4567',
                    'status' => 'Limited Availability',
                    'domain_id' => 108, // Assuming Digital Marketing is ID 8
                    'profile_completed' => true,
                ]
            ],
            [
                'name' => 'Carlos Mendoza',
                'email' => 'carlosm@example.com',
                'password' => Hash::make('password123'),
                'profile' => [
                    'name' => 'Carlos Mendoza',
                    'title' => 'Frontend Developer',
                    'bio' => 'Crafting responsive and accessible web interfaces with React, Vue, and modern CSS.',
                    'location' => 'Mexico City, Mexico',
                    'phone_number' => '+52 55 1234 5678',
                    'status' => 'available',
                    'domain_id' => 109, // Assuming Web Development is ID 1
                    'profile_completed' => true,
                ]
            ],
            [
                'name' => 'Priya Patel',
                'email' => 'priyap@example.com',
                'password' => Hash::make('password123'),
                'profile' => [
                    'name' => 'Priya Patel',
                    'title' => 'Backend Engineer',
                    'bio' => 'Building scalable APIs and server-side applications with Node.js and Python.',
                    'location' => 'Bangalore, India',
                    'phone_number' => '+91 80 1234 5678',
                    'status' => 'unavailable',
                    'domain_id' => 109, // Assuming Web Development is ID 1
                    'profile_completed' => true,
                ]
            ],
        ];
        
        foreach ($userData as $data) {
            // Create the user
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
                'email_verified_at' => now(),
                'remember_token' => \Str::random(10),
            ]);
            
            // Create profile for the user
            Profile::create([
                'name' => $data['profile']['name'],
                'title' => $data['profile']['title'],
                'bio' => $data['profile']['bio'],
                'location' => $data['profile']['location'],
                'phone_number' => $data['profile']['phone_number'],
                'image' => null, // You can add default images if needed
                'status' => $data['profile']['status'],
                'user_id' => $user->id,
                'domain_id' => $data['profile']['domain_id'],
                'profile_completed' => $data['profile']['profile_completed'],
            ]);
        }
    }
}