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

    public function showRequests($userId){
        $requests = $this->requestService->ShowRequests($userId);
        return view('users/requests', compact('requests'));

   }
}
