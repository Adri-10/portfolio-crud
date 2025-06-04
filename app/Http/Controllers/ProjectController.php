<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
        //return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'status' => 'required|in:draft,published'
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'project_url' => $request->project_url,
            'image' => $imagePath,
            'status' => $request->status
        ]);

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'status' => 'required|in:draft,published'
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $project->image);
            $project->image = $request->file('image')->store('images', 'public');
        }

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'project_url' => $request->project_url,
            'status' => $request->status,
            'image' => $project->image
        ]);

        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        Storage::delete('public/' . $project->image);
        $project->delete();
        return redirect()->route('projects.index');
    }
}
