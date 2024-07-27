<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->except('_token');
        $newProject = new Project($data);
        $newProject->save();

        return redirect()->route('admin.projects.show', ['project' => $newProject->id])->with($newProject->nome . "e' stato creato correttamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view ('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->except('_token');
        $project->update($data);

        return redirect()->route('admin.projects.show', ['project' => $project->id])->with($project->nome . "e' stato aggiornato correttamente");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
