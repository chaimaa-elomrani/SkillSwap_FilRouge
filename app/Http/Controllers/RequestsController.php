<?php

namespace App\Http\Controllers;

use App\Services\RequestService;
use Illuminate\Http\Request;

class RequestsController extends Controller
{
    
   protected $requestService;

   public function __construct(RequestService $requestService){
        $this->requestService = $requestService;
    }

//     public function ShowRequests($userId){
//         // dd($userId);
//         $requests = $this->requestService->ShowRequests($userId);
//         return view('users/posts', compact('requests'));

//    }

    public function ShowRequests($userId){
        $requests = $this->requestService->ShowRequests($userId);
        // dd($requests);
        return view('layout/request', comact('requests'));
    }
}
