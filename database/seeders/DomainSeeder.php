<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $domains = [
            // Digital & Tech Categories
            [
                'name' => 'Web Development',
                'description' => 'Build responsive websites and web applications with modern technologies.',
                'image' => 'web-development.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'Create native and cross-platform mobile applications for iOS and Android.',
                'image' => 'mobile-app-development.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'AI & Machine Learning',
                'description' => 'Develop intelligent systems, neural networks, and predictive models.',
                'image' => 'ai-machine-learning.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Blockchain & Crypto',
                'description' => 'Develop blockchain applications, smart contracts, and decentralized systems.',
                'image' => 'blockchain-crypto.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cybersecurity',
                'description' => 'Protect systems, networks, and programs from digital attacks and security breaches.',
                'image' => 'cybersecurity.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Data Science & Analytics',
                'description' => 'Extract insights from complex data using statistics and visualization techniques.',
                'image' => 'data-science.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cloud Computing',
                'description' => 'Design, deploy, and manage cloud infrastructure and services.',
                'image' => 'cloud-computing.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'AR/VR Development',
                'description' => 'Create immersive augmented and virtual reality experiences and applications.',
                'image' => 'ar-vr-development.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            // Creative Categories
            [
                'name' => 'Graphic Design',
                'description' => 'Create stunning visuals, logos, and brand identities with professional design techniques.',
                'image' => 'graphic-design.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'UX/UI Design',
                'description' => 'Design intuitive user experiences and beautiful interfaces for digital products.',
                'image' => 'ux-ui-design.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Video Production',
                'description' => 'Create, edit, and produce professional videos for various platforms and purposes.',
                'image' => 'video-production.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Animation',
                'description' => 'Create 2D and 3D animations for entertainment, advertising, and education.',
                'image' => 'animation.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Voice Acting',
                'description' => 'Provide professional voiceovers for commercials, animations, audiobooks, and more.',
                'image' => 'voice-acting.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Music Production',
                'description' => 'Compose, record, mix, and master music for various media and purposes.',
                'image' => 'music-production.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Content Writing',
                'description' => 'Create engaging written content for blogs, websites, social media, and more.',
                'image' => 'content-writing.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Photography',
                'description' => 'Capture stunning images with proper composition, lighting, and editing techniques.',
                'image' => 'photography.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            // Professional Services
            [
                'name' => 'Legal Services',
                'description' => 'Get legal advice, document preparation, and consultation from qualified professionals.',
                'image' => 'legal-services.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Accounting & Finance',
                'description' => 'Get financial advice, bookkeeping, tax preparation, and financial planning services.',
                'image' => 'accounting-finance.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Business Consulting',
                'description' => 'Get expert advice on business strategy, operations, and growth from experienced consultants.',
                'image' => 'business-consulting.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Human Resources',
                'description' => 'Get help with recruitment, employee management, and HR policy development.',
                'image' => 'human-resources.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Marketing & PR',
                'description' => 'Develop and execute marketing strategies, campaigns, and public relations initiatives.',
                'image' => 'marketing-pr.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Translation & Localization',
                'description' => 'Translate content and adapt products for different languages and cultural contexts.',
                'image' => 'translation-localization.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Real Estate Services',
                'description' => 'Get assistance with property valuation, market analysis, and real estate consulting.',
                'image' => 'real-estate-services.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Virtual Assistance',
                'description' => 'Get administrative support, scheduling, email management, and other virtual services.',
                'image' => 'virtual-assistance.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            // Lifestyle & Wellness
            [
                'name' => 'Fitness Training',
                'description' => 'Get personalized workout plans, fitness coaching, and exercise guidance.',
                'image' => 'fitness-training.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nutrition & Diet',
                'description' => 'Get personalized meal plans, nutritional advice, and dietary guidance.',
                'image' => 'nutrition-diet.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mental Health',
                'description' => 'Get support for mental wellbeing, stress management, and personal growth.',
                'image' => 'mental-health.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Yoga & Meditation',
                'description' => 'Learn yoga poses, meditation techniques, and mindfulness practices.',
                'image' => 'yoga-meditation.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Interior Design',
                'description' => 'Transform your living spaces with professional interior design and decoration advice.',
                'image' => 'interior-design.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Personal Styling',
                'description' => 'Get fashion advice, wardrobe consultation, and personal styling services.',
                'image' => 'personal-styling.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cooking & Culinary Arts',
                'description' => 'Learn cooking techniques, recipes, and food presentation from professional chefs.',
                'image' => 'cooking-culinary.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Gardening & Landscaping',
                'description' => 'Design and maintain beautiful gardens, landscapes, and outdoor spaces.',
                'image' => 'gardening-landscaping.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            // Education & Learning
            [
                'name' => 'Academic Tutoring',
                'description' => 'Get help with math, science, languages, and other academic subjects.',
                'image' => 'academic-tutoring.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Test Preparation',
                'description' => 'Prepare for standardized tests, entrance exams, and professional certifications.',
                'image' => 'test-preparation.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Language Learning',
                'description' => 'Learn to speak, read, and write in new languages with native speakers.',
                'image' => 'language-learning.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Music Lessons',
                'description' => 'Learn to play instruments, sing, or compose music with professional instructors.',
                'image' => 'music-lessons.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Professional Development',
                'description' => 'Enhance your career skills, leadership abilities, and professional knowledge.',
                'image' => 'professional-development.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Art & Craft Lessons',
                'description' => 'Learn painting, drawing, sculpture, and other artistic and craft techniques.',
                'image' => 'art-craft-lessons.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Coding & Programming',
                'description' => 'Learn programming languages, software development, and coding skills.',
                'image' => 'coding-programming.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cooking Classes',
                'description' => 'Learn culinary techniques, recipes, and food preparation from professional chefs.',
                'image' => 'cooking-classes.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            // Specialized Services
            [
                'name' => 'Home Repairs',
                'description' => 'Get help with home repairs, maintenance, and improvement projects.',
                'image' => 'home-repairs.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Car Mechanics & Repair',
                'description' => 'Get advice on car maintenance, repairs, and troubleshooting from mechanics.',
                'image' => 'car-mechanics.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pet Care & Training',
                'description' => 'Get advice on pet care, training, behavior, and health from animal experts.',
                'image' => 'pet-care.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Event Planning',
                'description' => 'Plan and organize weddings, parties, corporate events, and other special occasions.',
                'image' => 'event-planning.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Astrology & Tarot',
                'description' => 'Get astrological readings, tarot interpretations, and spiritual guidance.',
                'image' => 'astrology-tarot.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Genealogy & Family History',
                'description' => 'Research your family history, build family trees, and discover your ancestry.',
                'image' => 'genealogy.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Crafts & Handmade Items',
                'description' => 'Create handmade items, crafts, and DIY projects with expert guidance.',
                'image' => 'crafts-handmade.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Farming & Agriculture',
                'description' => 'Get advice on farming, agriculture, livestock, and sustainable practices.',
                'image' => 'farming-agriculture.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            // Trending Categories
            [
                'name' => 'AI Content Creation',
                'description' => 'Create content using AI tools, prompt engineering, and generative models.',
                'image' => 'ai-content-creation.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sustainable Living',
                'description' => 'Learn eco-friendly practices, zero waste living, and sustainable lifestyle choices.',
                'image' => 'sustainable-living.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cryptocurrency & NFTs',
                'description' => 'Get advice on cryptocurrency investing, NFT creation, and blockchain technology.',
                'image' => 'cryptocurrency-nfts.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Remote Work Solutions',
                'description' => 'Set up efficient remote work environments, tools, and productivity systems.',
                'image' => 'remote-work.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('domains')->insert($domains);
    }
}