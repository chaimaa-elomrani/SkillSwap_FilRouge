<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use App\Models\Skills;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    protected $skillsController;
    protected $domainsController;
    protected $languagesController;

    public function __construct(SkillsController $skillsController, DomainController $domainsController, LanguagesController $languagesController)
    {
        $this->skillsController = $skillsController;
        $this->domainsController = $domainsController;
        $this->languagesController = $languagesController;
    }


  // app/Http/Controllers/DashboardController.php
public function index()
{
    $domains = Domains::all(); // Or ->paginate() if needed
    $skills = Skills::with('domain')->paginate(10); // Also make sure you have the relation

    return view('admin/skills_domains_languages', compact('domains', 'skills'));
}

