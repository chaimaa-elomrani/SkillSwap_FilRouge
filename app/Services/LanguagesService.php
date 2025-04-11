<?php 
namespace App\Services;
use App\Models\Languages;
use Illuminate\Database\Eloquent\Collection;

class LanguagesService{
    
    public function getAllLanguages()
    {
        return Languages::orderBy('name')->paginate(10);
    }

    public function create(array $data): Languages
    {
        return Languages::create($data);
    }

    public function update(Languages $language, array $data): bool
    {
        return $language->update($data);
    }

    public function delete(Languages $language)
    {
        return $language->delete();
    }

    
}