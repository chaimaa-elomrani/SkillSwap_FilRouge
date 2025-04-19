<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Web Development for E-commerce Platform',
                'description' => 'I need professional help building a responsive e-commerce website with product listings, shopping cart functionality, and secure payment integration. The site should include user registration, product search filters, wish lists, product reviews, and a recommendation system. We need mobile optimization and fast loading times for the best user experience. The platform should be scalable as we plan to expand our product offerings in the future.',
                'domain_id' => 105,
                'user_id' => 1,
                'languages' => json_encode(['english', 'spanish']),
                'experience' => 'Intermediate',
                'credits_cost' => 75,
                'duration' => 14,
                'duration_unit' => 'days',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Logo Design for Tech Startup',
                'description' => 'Looking for a creative designer to create a modern, minimalist logo for my AI startup. The logo should convey innovation, intelligence, and trust. We prefer blue and purple color schemes but are open to suggestions. The logo needs to work well on light and dark backgrounds and be scalable for various applications including website header, business cards, social media profiles, and app icons. Please provide at least 3 concept variations.',
                'domain_id' => 105,
                'user_id' => 2,
                'languages' => json_encode(['english']),
                'experience' => 'Expert',
                'credits_cost' => 45,
                'duration' => 5,
                'duration_unit' => 'days',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile App UI Design',
                'description' => 'Need comprehensive UI/UX design for a fitness tracking mobile application with dashboard and progress metrics. The app will track workouts, nutrition, sleep, and provide personalized recommendations. We need wireframes and high-fidelity mockups for at least 10 key screens including onboarding, user profile, workout tracker, nutrition log, progress charts, and social sharing functionality. The design should follow material design guidelines for Android and iOS design principles.',
                'domain_id' => 105,
                'user_id' => 1,
                'languages' => json_encode(['english', 'french']),
                'experience' => 'Expert',
                'credits_cost' => 60,
                'duration' => 10,
                'duration_unit' => 'days',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Content Writing for Blog',
                'description' => 'Looking for someone to write 5 SEO-optimized blog posts about cryptocurrency and blockchain technology. Each article should be 1500-2000 words and cover topics like DeFi, NFTs, crypto investment strategies, blockchain use cases, and cryptocurrency regulations. Articles should be informative yet accessible to beginners, include relevant keywords, proper headings, and calls to action. Writer should have demonstrable knowledge about the cryptocurrency space and current market trends.',
                'domain_id' => 105,
                'user_id' => 3,
                'languages' => json_encode(['english']),
                'experience' => 'Intermediate',
                'credits_cost' => 30,
                'duration' => 7,
                'duration_unit' => 'days',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Python Data Analysis Project',
                'description' => 'Need help with a data analysis project using Python, pandas, and matplotlib to analyze customer purchase patterns from our e-commerce database. The project involves cleaning raw transaction data, identifying purchasing trends, customer segmentation, and creating visualizations of key metrics. Final deliverables should include Jupyter notebooks with annotated code, interactive visualizations, a summary report of findings, and recommendations for improving conversion rates. Experience with SQL and data visualization libraries is essential.',
                'domain_id' => 107,
                'user_id' => 2,
                'languages' => json_encode(['english', 'german']),
                'experience' => 'Expert',
                'credits_cost' => 90,
                'duration' => 48,
                'duration_unit' => 'hours',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Basic WordPress Website Setup',
                'description' => 'Need help setting up a WordPress site for my small local bakery business with basic pages and contact form. The website should include a homepage, about us page, services/menu page, gallery, testimonials, and contact page with an integrated Google Map. I need assistance selecting and customizing a responsive theme, setting up essential plugins for SEO, security, and contact forms. The site should load quickly and be optimized for local SEO to help customers find our physical location.',
                'domain_id' => 107,
                'user_id' => 4,
                'languages' => json_encode(['english', 'spanish']),
                'experience' => 'Beginner',
                'credits_cost' => 25,
                'duration' => 3,
                'duration_unit' => 'days',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Social Media Marketing Strategy',
                'description' => 'Looking for someone to create a comprehensive social media marketing strategy for my online bakery business. The strategy should include content plans for Instagram, Facebook, and Pinterest with posting schedules, engagement tactics, and growth strategies. I need advice on paid advertising budgets, targeting options, and performance metrics to monitor. The strategy should aim to increase brand awareness, drive website traffic, and generate leads for our custom cake ordering service. Please include case studies from similar businesses if possible.',
                'domain_id' => 106,
                'user_id' => 3,
                'languages' => json_encode(['english']),
                'experience' => 'Intermediate',
                'credits_cost' => 55,
                'duration' => 2,
                'duration_unit' => 'weeks',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Video Editing for YouTube Channel',
                'description' => 'Need a skilled video editor to edit 5 tech review videos for my YouTube channel with intro animations, smooth transitions, sound effects, and background music. Each video is approximately 15-20 minutes of raw footage that should be condensed to 8-10 minutes of engaging content. The editing should include adding lower thirds, text overlays, zooms/cuts for emphasis, color correction, and sound balancing. The final videos should follow my channel\'s existing style but I\'m open to suggestions for improvements to increase viewer retention.',
                'domain_id' => 106,
                'user_id' => 5,
                'languages' => json_encode(['english']),
                'experience' => 'Intermediate',
                'credits_cost' => 70,
                'duration' => 10,
                'duration_unit' => 'days',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Database Design and Implementation',
                'description' => 'Need help designing and implementing a PostgreSQL database for an inventory management system for a mid-sized retail business. The database should track products, suppliers, purchase orders, stock levels across multiple locations, sales transactions, and customer information. Requirements include designing normalized tables with proper relationships, implementing constraints and triggers for data integrity, creating indexes for performance optimization, and developing stored procedures for common operations. Experience with database security practices and backup strategies is required.',
                'domain_id' => 108,
                'user_id' => 2,
                'languages' => json_encode(['english', 'russian']),
                'experience' => 'Expert',
                'credits_cost' => 85,
                'duration' => 12,
                'duration_unit' => 'days',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Translation of Website Content',
                'description' => 'Need professional translation of my e-commerce website content from English to Spanish and French to expand into new markets. The content includes approximately 50 product descriptions (100-150 words each), 10 category pages, 5 landing pages, checkout process, and policy documents. Translations need to maintain the brand voice while being culturally appropriate for the target markets. Familiarity with e-commerce terminology and SEO considerations for multiple languages is important. The translated content should be delivered in a structured format that can be easily imported into our CMS.',
                'domain_id' => 108,
                'user_id' => 4,
                'languages' => json_encode(['english', 'spanish', 'french']),
                'experience' => 'Intermediate',
                'credits_cost' => 40,
                'duration' => 5,
                'duration_unit' => 'days',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table('posts')->insert($posts);
    }
}
