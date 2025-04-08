<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillsRequest;
use App\Models\Skill;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::latest()->get();
        return view('backend.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillsRequest $request)
    {
        $skill = new Skill();
        $skill->name = $request->name;
        $skill->percentage = $request->percentage;
        $skill->save();
        return redirect()->route('admin.skills.index')->with('success', 'skill created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $skill = Skill::findOrFail($id);
        return view('backend.skills.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skill = Skill::findOrFail($id);
        return view('backend.skills.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillsRequest $request, string $id)
    {
        $skill = Skill::findOrFail($id);
        $skill->name = $request->name;
        $skill->percentage = $request->percentage;
        $skill->update();
        return redirect()->route('admin.skills.index')->with('success', 'Skill updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skills = Skill::findOrFail($id);
        $skills->delete();
        return redirect()->route('admin.skills.index')->with('success', 'Skill deleted successfully.');
    }
}