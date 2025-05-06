<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            // User 1 - John Doe (Web Development)
            [
                'user_id' => 40,
                'title' => 'Building a Modern E-commerce Platform with Laravel',
                'description' => 'Looking for a junior developer to assist with building a fully-featured e-commerce platform using Laravel, Vue.js, and Tailwind CSS. The project involves implementing payment gateways, user authentication, product management, and order processing systems.',
                'domain_id' => 109,
                'languages' => json_encode(['PHP', 'JavaScript']),
                'skills' => json_encode(['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS']),
                'experience' => 'Intermediate',
                'credits_cost' => 250,
                'duration' => 3,
                'duration_unit' => 'weeks',
            ],
            [
                'user_id' => 40,
                'title' => 'API Development for Mobile App Integration',
                'description' => 'Need help developing RESTful APIs for our mobile application. The APIs will handle user authentication, data retrieval, and real-time notifications. Looking for someone with experience in building secure and scalable APIs.',
                'domain_id' => 108,
                'languages' => json_encode(['PHP', 'JavaScript']),
                'skills' => json_encode(['Laravel', 'Node.js', 'RESTful API', 'JWT']),
                'experience' => 'Expert',
                'credits_cost' => 350,
                'duration' => 2,
                'duration_unit' => 'weeks',
            ],
            
            // User 2 - Jane Smith (Mobile Development)
            [
                'user_id' => 41,
                'title' => 'Cross-Platform Mobile App for Fitness Tracking',
                'description' => 'Seeking a developer to help with a fitness tracking mobile application that works on both iOS and Android. The app will track workouts, provide analytics, and integrate with health APIs. Experience with React Native or Flutter is required.',
                'domain_id' => 108,
                'languages' => json_encode(['JavaScript', 'Dart']),
                'skills' => json_encode(['React Native', 'Flutter', 'Firebase', 'Health API']),
                'experience' => 'Intermediate',
                'credits_cost' => 300,
                'duration' => 4,
                'duration_unit' => 'weeks',
            ],
            
            // User 3 - Alex Johnson (Data Science)
            [
                'user_id' => 41,
                'title' => 'Building a Recommendation System',
                'description' => 'Need assistance in developing a recommendation system for our e-commerce platform. The project involves analyzing user behavior, product attributes, and purchase history to generate personalized product recommendations.',
                'domain_id' => 108,
                'languages' => json_encode(['Python', 'R']),
                'skills' => json_encode(['Machine Learning', 'Data Mining', 'Pandas', 'Scikit-learn']),
                'experience' => 'Expert',
                'credits_cost' => 400,
                'duration' => 3,
                'duration_unit' => 'weeks',
            ],
            [
                'user_id' => 41,
                'title' => 'Data Visualization Dashboard for Business Analytics',
                'description' => 'Looking for a data scientist to help create interactive data visualizations for our business analytics dashboard. The project involves cleaning data, creating meaningful visualizations, and implementing interactive components.',
                'domain_id' => 107,
                'languages' => json_encode(['Python', 'JavaScript']),
                'skills' => json_encode(['Pandas', 'D3.js', 'Tableau', 'Data Visualization']),
                'experience' => 'Intermediate',
                'credits_cost' => 275,
                'duration' => 2,
                'duration_unit' => 'weeks',
            ],
            
            // User 4 - Maria Rodriguez (UI/UX Design)
            [
                'user_id' => 42,
                'title' => 'Mobile App UI Redesign',
                'description' => 'We need a UI/UX designer to redesign our existing mobile application interface. The goal is to improve user experience, modernize the visual design, and ensure accessibility compliance.',
                'domain_id' => 107,
                'languages' => json_encode(['Sketch', 'Figma']),
                'skills' => json_encode(['UI Design', 'UX Research', 'Prototyping', 'Accessibility']),
                'experience' => 'Expert',
                'credits_cost' => 320,
                'duration' => 3,
                'duration_unit' => 'weeks',
            ],
            
            // User 5 - David Kim (DevOps)
            [
                'user_id' => 42,
                'title' => 'Setting Up CI/CD Pipeline for Web Application',
                'description' => 'Need help setting up a robust CI/CD pipeline for our web application. The pipeline should include automated testing, deployment, and monitoring. Experience with GitHub Actions, Docker, and AWS is preferred.',
                'domain_id' => 107,
                'languages' => json_encode(['YAML', 'Bash', 'JavaScript']),
                'skills' => json_encode(['Docker', 'GitHub Actions', 'AWS', 'Jenkins']),
                'experience' => 'Intermediate',
                'credits_cost' => 280,
                'duration' => 2,
                'duration_unit' => 'weeks',
            ],
            
            // User 6 - Sarah Chen (Cloud Computing)
            [
                'user_id' => 43,
                'title' => 'Migrating Legacy System to AWS',
                'description' => 'Looking for a cloud expert to help migrate our legacy on-premises system to AWS. The project involves designing the cloud architecture, data migration, and ensuring minimal downtime during the transition.',
                'domain_id' => 115,
                'languages' => json_encode(['Python', 'Bash']),
                'skills' => json_encode(['AWS', 'Cloud Migration', 'Infrastructure as Code', 'Terraform']),
                'experience' => 'Expert',
                'credits_cost' => 450,
                'duration' => 4,
                'duration_unit' => 'weeks',
            ],
            [
                'user_id' => 43,
                'title' => 'Serverless Architecture Implementation',
                'description' => 'Need assistance in implementing a serverless architecture for our web application. The project involves refactoring existing code to work with AWS Lambda, API Gateway, and DynamoDB.',
                'domain_id' => 115,
                'languages' => json_encode(['JavaScript', 'Python']),
                'skills' => json_encode(['AWS Lambda', 'API Gateway', 'DynamoDB', 'Serverless']),
                'experience' => 'Intermediate',
                'credits_cost' => 350,
                'duration' => 3,
                'duration_unit' => 'weeks',
            ],
            
            // User 7 - Michael Brown (Cybersecurity)
            [
                'user_id' => 43,
                'title' => 'Security Audit for Web Application',
                'description' => 'Looking for a security expert to conduct a comprehensive security audit of our web application. The audit should identify vulnerabilities, assess risks, and provide recommendations for security improvements.',
                'domain_id' => 115,
                'languages' => json_encode(['Python', 'JavaScript']),
                'skills' => json_encode(['Penetration Testing', 'OWASP', 'Security Auditing', 'Vulnerability Assessment']),
                'experience' => 'Expert',
                'credits_cost' => 400,
                'duration' => 2,
                'duration_unit' => 'weeks',
            ],
            
            // User 8 - Emma Wilson (Digital Marketing)
            [
                'user_id' => 37,
                'title' => 'SEO Optimization for E-commerce Website',
                'description' => 'Need help optimizing our e-commerce website for search engines. The project involves keyword research, on-page optimization, technical SEO fixes, and content strategy development.',
                'domain_id' => 109,
                'languages' => json_encode(['HTML', 'JavaScript']),
                'skills' => json_encode(['SEO', 'Google Analytics', 'Keyword Research', 'Content Strategy']),
                'experience' => 'Intermediate',
                'credits_cost' => 220,
                'duration' => 3,
                'duration_unit' => 'weeks',
            ],
            [
                'user_id' => 37,
                'title' => 'Social Media Marketing Campaign',
                'description' => 'Looking for a digital marketing specialist to help plan and execute a social media marketing campaign for our new product launch. The campaign will include content creation, ad management, and performance analysis.',
                'domain_id' => 109,
                'languages' => json_encode(['English', 'Spanish']),
                'skills' => json_encode(['Social Media Marketing', 'Facebook Ads', 'Instagram Marketing', 'Analytics']),
                'experience' => 'Intermediate',
                'credits_cost' => 180,
                'duration' => 2,
                'duration_unit' => 'weeks',
            ],
            
            // User 9 - Carlos Mendoza (Web Development)
            [
                'user_id' => 38,
                'title' => 'Responsive Website Redesign',
                'description' => 'Need help redesigning our company website to be fully responsive and modern. The project involves frontend development with a focus on responsive design, performance optimization, and accessibility.',
                'domain_id' => 114,
                'languages' => json_encode(['HTML', 'CSS', 'JavaScript']),
                'skills' => json_encode(['React', 'Responsive Design', 'CSS Grid', 'Accessibility']),
                'experience' => 'Intermediate',
                'credits_cost' => 250,
                'duration' => 3,
                'duration_unit' => 'weeks',
            ],
            
            // User 10 - Priya Patel (Web Development)
            [
                'user_id' => 38,
                'title' => 'Backend Development for SaaS Platform',
                'description' => 'Looking for a backend developer to help build the server-side components of our SaaS platform. The project involves developing APIs, database design, authentication systems, and integration with third-party services.',
                'domain_id' => 114,
                'languages' => json_encode(['Python', 'JavaScript']),
                'skills' => json_encode(['Node.js', 'Express', 'MongoDB', 'API Development']),
                'experience' => 'Expert',
                'credits_cost' => 380,
                'duration' => 4,
                'duration_unit' => 'weeks',
            ],
            [
                'user_id' => 38,
                'title' => 'Real-time Chat Application Development',
                'description' => 'Need assistance in developing a real-time chat feature for our web application. The project involves implementing WebSockets, message storage, and user presence indicators.',
                'domain_id' => 105,
                'languages' => json_encode(['JavaScript', 'TypeScript']),
                'skills' => json_encode(['Node.js', 'Socket.io', 'Redis', 'MongoDB']),
                'experience' => 'Intermediate',
                'credits_cost' => 320,
                'duration' => 2,
                'duration_unit' => 'weeks',
            ],
        ];
        
        foreach ($posts as $post) {
            Posts::create($post);
        }
    }
}