<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('index', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('show', compact('project'));
    }
}
