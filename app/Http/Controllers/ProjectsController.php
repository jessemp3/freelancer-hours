<?php

namespace App\Http\Controllers;

use App\Models\projects;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index');
    }

    public function show(projects $projects)
    {
        return view('projects.show', compact('projects'));
    }
}
