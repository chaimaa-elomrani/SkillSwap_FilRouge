<?php

namespace App\Http\Controllers;

use App\Models\languages;
use App\Services\LanguagesService;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{

    protected $languagesService;
    public function __construct(LanguagesService $languagesService){
        $this->languagesService = $languagesService;
    }


    public function index(){
        $languages = $this->languagesService->getAllLanguages();
        return view('languages.index', compact('languages'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $this->languagesService->create([
            'name' => $validated['name'],
        ]);
        return redirect()->route('languages.index');
    }

    public function update(Request $request, Languages $language){
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $this->languagesService->update($language, $data);
        return redirect()->route('languages.index');
    }

    public function destroy(Languages $language){
        $this->languagesService->delete($language);
        return redirect()->route('languages.index');
    }
   
}
