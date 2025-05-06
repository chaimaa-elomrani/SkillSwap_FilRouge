<?php

namespace Database\Seeders;

use App\Models\Requests;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Request;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $requests = [
            // Request 1: User 3 (Alex) sending request to User 1 (John) for his first post
            [
                'sender_id' => 3,
                'receiver_id' => 1,
                'post_id' => 1, // John's E-commerce Platform post
                'status' => 'pending',
                'confirmed' => false,
            ],
            
            // Request 2: User 5 (David) sending request to User 1 (John) for his second post
            [
                'sender_id' => 5,
                'receiver_id' => 1,
                'post_id' => 2, // John's API Development post
                'status' => 'accepted',
                'confirmed' => true,
            ],
            
            // Request 3: User 4 (Maria) sending request to User 2 (Jane) for her post
            [
                'sender_id' => 4,
                'receiver_id' => 2,
                'post_id' => 3, // Jane's Mobile App post
                'status' => 'declined',
                'confirmed' => false,
            ],
            
            // Request 4: User 2 (Jane) sending request to User 3 (Alex) for his first post
            [
                'sender_id' => 2,
                'receiver_id' => 3,
                'post_id' => 4, // Alex's Recommendation System post
                'status' => 'accepted',
                'confirmed' => false,
            ],
            
            // Request 5: User 1 (John) sending request to User 3 (Alex) for his second post
            [
                'sender_id' => 1,
                'receiver_id' => 3,
                'post_id' => 5, // Alex's Data Visualization post
                'status' => 'pending',
                'confirmed' => false,
            ],
            
            // Request 6: User 6 (Sarah) sending request to User 4 (Maria) for her post
            [
                'sender_id' => 6,
                'receiver_id' => 4,
                'post_id' => 6, // Maria's Mobile App UI Redesign post
                'status' => 'accepted',
                'confirmed' => true,
            ],
            
            // Request 7: User 7 (Michael) sending request to User 5 (David) for his post
            [
                'sender_id' => 7,
                'receiver_id' => 5,
                'post_id' => 7, // David's CI/CD Pipeline post
                'status' => 'pending',
                'confirmed' => false,
            ],
            
            // Request 8: User 8 (Emma) sending request to User 6 (Sarah) for her first post
            [
                'sender_id' => 8,
                'receiver_id' => 6,
                'post_id' => 8, // Sarah's AWS Migration post
                'status' => 'declined',
                'confirmed' => false,
            ],
            
            // Request 9: User 9 (Carlos) sending request to User 6 (Sarah) for her second post
            [
                'sender_id' => 9,
                'receiver_id' => 6,
                'post_id' => 9, // Sarah's Serverless Architecture post
                'status' => 'accepted',
                'confirmed' => true,
            ],
            
            // Request 10: User 10 (Priya) sending request to User 7 (Michael) for his post
            [
                'sender_id' => 10,
                'receiver_id' => 7,
                'post_id' => 10, // Michael's Security Audit post
                'status' => 'pending',
                'confirmed' => false,
            ],
            
            // Request 11: User 7 (Michael) sending request to User 8 (Emma) for her first post
            [
                'sender_id' => 7,
                'receiver_id' => 8,
                'post_id' => 11, // Emma's SEO Optimization post
                'status' => 'accepted',
                'confirmed' => false,
            ],
            
            // Request 12: User 3 (Alex) sending request to User 8 (Emma) for her second post
            [
                'sender_id' => 3,
                'receiver_id' => 8,
                'post_id' => 12, // Emma's Social Media Marketing post
                'status' => 'pending',
                'confirmed' => false,
            ],
            
            // Request 13: User 5 (David) sending request to User 9 (Carlos) for his post
            [
                'sender_id' => 5,
                'receiver_id' => 9,
                'post_id' => 13, // Carlos's Responsive Website post
                'status' => 'accepted',
                'confirmed' => true,
            ],
            
            // Request 14: User 2 (Jane) sending request to User 10 (Priya) for her first post
            [
                'sender_id' => 2,
                'receiver_id' => 10,
                'post_id' => 14, // Priya's Backend Development post
                'status' => 'pending',
                'confirmed' => false,
            ],
            
            // Request 15: User 4 (Maria) sending request to User 10 (Priya) for her second post
            [
                'sender_id' => 4,
                'receiver_id' => 10,
                'post_id' => 15, // Priya's Chat Application post
                'status' => 'declined',
                'confirmed' => false,
            ],
        ];
        
        foreach ($requests as $requestData) {
            Requests::create($requestData);
        }
    }
}