<?php

namespace App\Services;

use App\Models\Requests;
use App\Models\User;

class RequestService
{

    public function ShowRequests($userId){
       return  Requests::with('sender.profile')->where('receiver_id', $userId)->get();
      
    }

    public function sendRequest($senderId, $receiverId, $postId) {
        return Requests::create([
            'sender_id' => $senderId,
            'receiver_id' => $receiverId,
            'post_id' => $postId,
            'status' => 'pending'
        ]);
    }


}