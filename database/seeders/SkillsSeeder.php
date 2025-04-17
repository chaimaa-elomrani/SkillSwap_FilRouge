<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Web Development Skills
            [
                'name' => 'HTML/CSS',
                'domain_id' => 1,
            ],
            [
                'name' => 'JavaScript',
                'domain_id' => 1,
            ],
            [
                'name' => 'PHP/Laravel',
                'domain_id' => 1,
            ],

            // Mobile App Development Skills
            [
                'name' => 'Swift/iOS Development',
                'domain_id' => 2,
            ],
            [
                'name' => 'Android Development',
                'domain_id' => 2,
            ],
            [
                'name' => 'React Native',
                'domain_id' => 2,
            ],

            // AI & Machine Learning Skills
            [
                'name' => 'Python for ML',
                'domain_id' => 3,
            ],
            [
                'name' => 'Neural Networks',
                'domain_id' => 3,
            ],
            [
                'name' => 'NLP',
                'domain_id' => 3,
            ],

            // Blockchain & Crypto Skills
            [
                'name' => 'Smart Contracts',
                'domain_id' => 4,
            ],
            [
                'name' => 'Solidity',
                'domain_id' => 4,
            ],
            [
                'name' => 'DeFi Development',
                'domain_id' => 4,
            ],

            // Cybersecurity Skills
            [
                'name' => 'Penetration Testing',
                'domain_id' => 5,
            ],
            [
                'name' => 'Security Auditing',
                'domain_id' => 5,
            ],
            [
                'name' => 'Cryptography',
                'domain_id' => 5,
            ],

            // Data Science & Analytics Skills
            [
                'name' => 'Data Visualization',
                'domain_id' => 6,
            ],
            [
                'name' => 'Statistical Analysis',
                'domain_id' => 6,
            ],
            [
                'name' => 'SQL/Database Skills',
                'domain_id' => 6,
            ],

            // Cloud Computing Skills
            [
                'name' => 'AWS Services',
                'domain_id' => 7,
            ],
            [
                'name' => 'DevOps',
                'domain_id' => 7,
            ],
            [
                'name' => 'Containerization',
                'domain_id' => 7,
            ],

            // AR/VR Development Skills
            [
                'name' => 'Unity 3D',
                'domain_id' => 8,
            ],
            [
                'name' => 'AR Kit/AR Core',
                'domain_id' => 8,
            ],
            [
                'name' => '3D Modeling',
                'domain_id' => 8,
            ],

            // Graphic Design Skills
            [
                'name' => 'Adobe Photoshop',
                'domain_id' => 9,
            ],
            [
                'name' => 'Logo Design',
                'domain_id' => 9,
            ],
            [
                'name' => 'Typography',
                'domain_id' => 9,
            ],

            // UX/UI Design Skills
            [
                'name' => 'Wireframing',
                'domain_id' => 10,
            ],
            [
                'name' => 'User Research',
                'domain_id' => 10,
            ],
            [
                'name' => 'Figma',
                'domain_id' => 10,
            ],

            // Continue with additional domains...
            // For brevity, I'll add a few more and you can extend as needed

            // Video Production Skills
            [
                'name' => 'Video Editing',
                'domain_id' => 11,
            ],
            [
                'name' => 'Cinematography',
                'domain_id' => 11,
            ],
            [
                'name' => 'Color Grading',
                'domain_id' => 11,
            ],

            // Animation Skills
            [
                'name' => '2D Animation',
                'domain_id' => 12,
            ],
            [
                'name' => '3D Animation',
                'domain_id' => 12,
            ],
            [
                'name' => 'Character Rigging',
                'domain_id' => 12,
            ],

            // Voice Acting Skills
            [
                'name' => 'Voice Characterization',
                'domain_id' => 13,
            ],
            [
                'name' => 'Script Reading',
                'domain_id' => 13,
            ],
            [
                'name' => 'Audio Editing',
                'domain_id' => 13,
            ],
        ];

        DB::table('skills')->insert($skills);
    }
}
