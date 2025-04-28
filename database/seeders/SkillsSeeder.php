<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Web Development (105)
            [
                'name' => 'HTML/CSS',
                'domain_id' => 105,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'JavaScript',
                'domain_id' => 105,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PHP/Laravel',
                'domain_id' => 105,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Mobile App Development (106)
            [
                'name' => 'iOS Development',
                'domain_id' => 106,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Android Development',
                'domain_id' => 106,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'React Native',
                'domain_id' => 106,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // AI & Machine Learning (107)
            [
                'name' => 'Python for ML',
                'domain_id' => 107,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Neural Networks',
                'domain_id' => 107,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Natural Language Processing',
                'domain_id' => 107,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Blockchain & Crypto (108)
            [
                'name' => 'Smart Contracts',
                'domain_id' => 108,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Solidity',
                'domain_id' => 108,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'DApp Development',
                'domain_id' => 108,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Cybersecurity (109)
            [
                'name' => 'Penetration Testing',
                'domain_id' => 109,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Network Security',
                'domain_id' => 109,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Security Auditing',
                'domain_id' => 109,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Data Science & Analytics (110)
            [
                'name' => 'Data Visualization',
                'domain_id' => 110,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Statistical Analysis',
                'domain_id' => 110,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Big Data Processing',
                'domain_id' => 110,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Cloud Computing (111)
            [
                'name' => 'AWS',
                'domain_id' => 111,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Azure',
                'domain_id' => 111,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Docker & Kubernetes',
                'domain_id' => 111,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // AR/VR Development (112)
            [
                'name' => 'Unity 3D',
                'domain_id' => 112,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ARKit/ARCore',
                'domain_id' => 112,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '3D Modeling',
                'domain_id' => 112,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Graphic Design (113)
            [
                'name' => 'Adobe Photoshop',
                'domain_id' => 113,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Logo Design',
                'domain_id' => 113,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Brand Identity',
                'domain_id' => 113,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // UX/UI Design (114)
            [
                'name' => 'Wireframing',
                'domain_id' => 114,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Figma',
                'domain_id' => 114,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'User Research',
                'domain_id' => 114,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Video Production (115)
            [
                'name' => 'Video Editing',
                'domain_id' => 115,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Motion Graphics',
                'domain_id' => 115,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cinematography',
                'domain_id' => 115,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Animation (116)
            [
                'name' => '2D Animation',
                'domain_id' => 116,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '3D Animation',
                'domain_id' => 116,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Character Design',
                'domain_id' => 116,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Voice Acting (117)
            [
                'name' => 'Character Voices',
                'domain_id' => 117,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Commercial Narration',
                'domain_id' => 117,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Audiobook Recording',
                'domain_id' => 117,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Music Production (118)
            [
                'name' => 'Mixing & Mastering',
                'domain_id' => 118,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Composition',
                'domain_id' => 118,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sound Design',
                'domain_id' => 118,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Content Writing (119)
            [
                'name' => 'Blog Writing',
                'domain_id' => 119,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Copywriting',
                'domain_id' => 119,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'SEO Content',
                'domain_id' => 119,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Photography (120)
            [
                'name' => 'Portrait Photography',
                'domain_id' => 120,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Product Photography',
                'domain_id' => 120,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Photo Editing',
                'domain_id' => 120,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Legal Services (121)
            [
                'name' => 'Contract Law',
                'domain_id' => 121,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Intellectual Property',
                'domain_id' => 121,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Legal Document Preparation',
                'domain_id' => 121,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Accounting & Finance (122)
            [
                'name' => 'Bookkeeping',
                'domain_id' => 122,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tax Preparation',
                'domain_id' => 122,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Financial Planning',
                'domain_id' => 122,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Business Consulting (123)
            [
                'name' => 'Strategic Planning',
                'domain_id' => 123,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Business Analysis',
                'domain_id' => 123,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Market Research',
                'domain_id' => 123,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Human Resources (124)
            [
                'name' => 'Recruitment',
                'domain_id' => 124,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Employee Training',
                'domain_id' => 124,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'HR Policy Development',
                'domain_id' => 124,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Marketing & PR (125)
            [
                'name' => 'Digital Marketing',
                'domain_id' => 125,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Social Media Management',
                'domain_id' => 125,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PR Strategy',
                'domain_id' => 125,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Translation & Localization (126)
            [
                'name' => 'Document Translation',
                'domain_id' => 126,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Software Localization',
                'domain_id' => 126,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Website Translation',
                'domain_id' => 126,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Real Estate Services (127)
            [
                'name' => 'Property Valuation',
                'domain_id' => 127,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Market Analysis',
                'domain_id' => 127,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Investment Consulting',
                'domain_id' => 127,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Virtual Assistance (128)
            [
                'name' => 'Email Management',
                'domain_id' => 128,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Calendar Management',
                'domain_id' => 128,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Administrative Support',
                'domain_id' => 128,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Fitness Training (129)
            [
                'name' => 'Strength Training',
                'domain_id' => 129,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cardio Workouts',
                'domain_id' => 129,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Personal Training',
                'domain_id' => 129,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Nutrition & Diet (130)
            [
                'name' => 'Meal Planning',
                'domain_id' => 130,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nutritional Analysis',
                'domain_id' => 130,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Dietary Consultation',
                'domain_id' => 130,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Mental Health (131)
            [
                'name' => 'Stress Management',
                'domain_id' => 131,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Anxiety Coaching',
                'domain_id' => 131,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mindfulness Techniques',
                'domain_id' => 131,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Yoga & Meditation (132)
            [
                'name' => 'Hatha Yoga',
                'domain_id' => 132,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Guided Meditation',
                'domain_id' => 132,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Breathing Techniques',
                'domain_id' => 132,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Interior Design (133)
            [
                'name' => 'Space Planning',
                'domain_id' => 133,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Color Theory',
                'domain_id' => 133,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Furniture Selection',
                'domain_id' => 133,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Personal Styling (134)
            [
                'name' => 'Wardrobe Consultation',
                'domain_id' => 134,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Body Type Analysis',
                'domain_id' => 134,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Shopping Assistance',
                'domain_id' => 134,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Cooking & Culinary Arts (135)
            [
                'name' => 'Recipe Development',
                'domain_id' => 135,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Knife Skills',
                'domain_id' => 135,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pastry Making',
                'domain_id' => 135,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Gardening & Landscaping (136)
            [
                'name' => 'Plant Selection',
                'domain_id' => 136,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Garden Design',
                'domain_id' => 136,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sustainable Gardening',
                'domain_id' => 136,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Academic Tutoring (137)
            [
                'name' => 'Mathematics',
                'domain_id' => 137,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Science Subjects',
                'domain_id' => 137,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Essay Writing',
                'domain_id' => 137,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Test Preparation (138)
            [
                'name' => 'SAT/ACT Prep',
                'domain_id' => 138,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'GMAT/GRE Prep',
                'domain_id' => 138,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Professional Certification Prep',
                'domain_id' => 138,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Language Learning (139)
            [
                'name' => 'Spanish',
                'domain_id' => 139,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mandarin Chinese',
                'domain_id' => 139,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'English as Second Language',
                'domain_id' => 139,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Music Lessons (140)
            [
                'name' => 'Piano',
                'domain_id' => 140,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Guitar',
                'domain_id' => 140,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Vocal Training',
                'domain_id' => 140,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Professional Development (141)
            [
                'name' => 'Leadership Training',
                'domain_id' => 141,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Public Speaking',
                'domain_id' => 141,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Project Management',
                'domain_id' => 141,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Art & Craft Lessons (142)
            [
                'name' => 'Painting',
                'domain_id' => 142,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pottery',
                'domain_id' => 142,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Textile Arts',
                'domain_id' => 142,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Coding & Programming (143)
            [
                'name' => 'Python',
                'domain_id' => 143,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Web Development',
                'domain_id' => 143,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Data Structures & Algorithms',
                'domain_id' => 143,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Cooking Classes (144)
            [
                'name' => 'Baking',
                'domain_id' => 144,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ethnic Cuisines',
                'domain_id' => 144,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Meal Preparation',
                'domain_id' => 144,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Electrical Work',
                'domain_id' => 145,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Carpentry',
                'domain_id' => 145,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Car Mechanics & Repair (146)
            [
                'name' => 'Engine Diagnostics',
                'domain_id' => 146,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Brake Repair',
                'domain_id' => 146,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Oil Changes & Maintenance',
                'domain_id' => 146,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Pet Care & Training (147)
            [
                'name' => 'Dog Training',
                'domain_id' => 147,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pet Nutrition',
                'domain_id' => 147,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pet Behavior',
                'domain_id' => 147,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Event Planning (148)
            [
                'name' => 'Wedding Planning',
                'domain_id' => 148,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Corporate Event Planning',
                'domain_id' => 148,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Party Decoration',
                'domain_id' => 148,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Astrology & Tarot (149)
            [
                'name' => 'Birth Chart Reading',
                'domain_id' => 149,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tarot Card Reading',
                'domain_id' => 149,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Zodiac Compatibility',
                'domain_id' => 149,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Genealogy & Family History (150)
            [
                'name' => 'Family Tree Research',
                'domain_id' => 150,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ancestry DNA Analysis',
                'domain_id' => 150,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Historical Records Search',
                'domain_id' => 150,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Crafts & Handmade Items (151)
            [
                'name' => 'Knitting & Crochet',
                'domain_id' => 151,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jewelry Making',
                'domain_id' => 151,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Woodworking',
                'domain_id' => 151,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Farming & Agriculture (152)
            [
                'name' => 'Organic Farming',
                'domain_id' => 152,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Crop Production',
                'domain_id' => 152,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Environmental Consulting (153)
            [
                'name' => 'Sustainability Planning',
                'domain_id' => 153,
                'type' => 'soft',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Environmental Impact Assessment',
                'domain_id' => 153,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Renewable Energy Consulting',
                'domain_id' => 153,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Mechanical Engineering (154)
            [
                'name' => 'CAD Design',
                'domain_id' => 154,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Prototyping',
                'domain_id' => 154,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Thermal Analysis',
                'domain_id' => 154,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Electrical Engineering (155)
            [
                'name' => 'Circuit Design',
                'domain_id' => 155,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PCB Layout',
                'domain_id' => 155,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Power Systems',
                'domain_id' => 155,
                'type' => 'hard',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('skills')->insert($skills);
    }
}