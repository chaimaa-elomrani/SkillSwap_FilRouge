<?php 

namespace App\Services;
use App\Models\PersonalServices;
use App\Models\User;
use Request;

class PersonalServicesService{





    public function deleteServices($id){
        $service = PersonalServices::find($id);
        $service->delete();
        return redirect()->route('profile.index')->with('success', 'Service deleted successfully!');
    }
}