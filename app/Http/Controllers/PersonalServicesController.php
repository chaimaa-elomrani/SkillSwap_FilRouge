<?php

namespace App\Http\Controllers;

use App\Models\PersonalServices;
use App\Services\PersonalServicesService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonalServicesController extends Controller
{

    protected $ServicesService;

    public function __construct(PersonalServicesService $ServicesService){
        $this->ServicesService = $ServicesService;
    }

    public function getPersonalServicesbyUserId($userId)
    {
        $user = auth()->user()->load('personalServices');
        return view('users/profile', compact('user'));
    }


    // public function  store(){
    //     $services = $this->ServicesService->storePersonalServices();
    //     return view('users/profile', compact('services'));
    // }

    public function store(Request $request){
   
        $attribute = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:750',
            'credit_cost' =>'required|numeric|min:0',
        ]);

        $attribute['user_id'] = auth()->id();

      
        $services = PersonalServices::create($attribute);
        // dd($services);

        $user = auth()->user()->load('personalServices');
        return redirect()->route('profile.index', compact('user'));

    }
    

    public function destroy($service){
        $this->ServicesService->deleteServices($service);
        return redirect()->route('profile.index', compact('service'));
    }
}
