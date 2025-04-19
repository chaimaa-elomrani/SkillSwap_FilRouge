<?php

namespace App\Services;
use App\Models\Domains;

class DomainsService
{

    public function getDomains(){
        return Domains::all();
    }

    public function getGroupedDomainsByType(array $types)
    {
        return Domains::with('type', 'skills')
            ->whereHas('type', function ($query) use ($types) {
                $query->whereIn('name', $types);
            })
            ->get() 
            ->groupBy(fn($domains) => $domains->type->name);
    }
}