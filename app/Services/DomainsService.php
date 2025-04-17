<?php

namespace App\Services;
use App\Models\Domains;

class DomainsService
{

    public function getAllCategories()
    {
        return Domains::all();
    }


    public function getDomainByType($type)
    {
        return Domains::with('type')->whereHas('type', function ($query) use ($type) {
            $query->where('name', $type);
        })->get()->groupBy(fn ($domain) => $domain->type->name);
    }
}