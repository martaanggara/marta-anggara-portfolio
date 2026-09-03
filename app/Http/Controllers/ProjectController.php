<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('order')->get();
        return view('home', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('project-show', compact('project'));
    }

    public function about()
    {
        return view('about');
    }
    
}