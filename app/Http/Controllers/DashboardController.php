<?php

namespace App\Http\Controllers;

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


    // public function getSkills(){
    //     $skills = $this->skillsController->index();
    //     return view('skills_domains_languages', compact('skills'));
    // }

    public function getDomains(){
        $domains = $this->domainsController->index();
        return $domains;
    }

    public function getLanguages(){
        $languages = $this->languagesController->index();
        return $languages;
    }
    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    
    public function index()
    {
        return view('admin/dashboard');
    }

    public function skills_domains_lang()
    {
        return view('admin/skills_domains_languages');
    }

}
