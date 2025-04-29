<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Request;
use Illuminate\Support\Facades\DB;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Make sure we have users to work with
        $users = User::all();
        
        if ($users->count() < 5) {
            // If there aren't enough users, create some
            User::factory(5)->create();
            $users = User::all();
        }
        
        // Create some requests with different statuses
        $statuses = ['pending', 'accepted', 'declined'];
        
        // Create 20 random requests
        for ($i = 0; $i < 20; $i++) {
            // Get different sender and receiver
            $sender = $users->random();
            $receiver = $users->where('id', '!=', $sender->id)->random();
            
            DB::table('requests')->insert([
                'sender_id' => $sender->id,
                'receiver_id' => $receiver->id,
                'status' => $statuses[array_rand($statuses)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}