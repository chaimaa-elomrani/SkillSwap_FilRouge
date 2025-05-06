<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\UserLanguage;
use Illuminate\Support\Facades\Auth;

class LanguageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $language = Language::firstOrCreate([
            'name' => $request->name
        ]);

        $exists = UserLanguage::where('user_id', Auth::id())
            ->where('language_id', $language->id)
            ->exists();

        if (!$exists) {
            UserLanguage::create([
                'user_id' => Auth::id(),
                'language_id' => $language->id
            ]);
        }

        return response()->json([
            'success' => true,
            'language' => $language
        ]);
    }

    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        
        UserLanguage::where('user_id', Auth::id())
            ->where('language_id', $id)
            ->delete();
            
        return redirect()->back()->with('success', 'Language removed successfully');
    }
}