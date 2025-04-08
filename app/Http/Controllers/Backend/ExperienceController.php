<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::latest()->get();
        return view('backend.experiences.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceRequest $request)
    {

        $experiences = new Experience();
        $experiences->name = $request->name;
        $experiences->company_name = $request->company_name;
        $experiences->designation = $request->designation;
        $experiences->address = $request->address;
        $experiences->description = $request->description;
        $experiences->description = $request->description;
        $experiences->start_date = $request->start_date;
        $experiences->end_date = $request->end_date;

        $experiences->save();
        return redirect()->route('admin.experiences.index')->with('success', 'Experience created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $experience = Experience::findOrFail($id);
        return view('backend.experiences.show', compact('experience'));
    }

    /**
     * Show the form for editing the specified resource.
     */ public function edit(string $id)
    {
        $experience = Experience::findOrFail($id);
        return view('backend.experiences.edit', compact('experience'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienceRequest $request, string $id)
    {
        $experiences = Experience::findOrFail($id);
        $experiences->name = $request->name;
        $experiences->designation = $request->designation;
        $experiences->address = $request->address;
        $experiences->description = $request->description;
        $experiences->start_date = $request->start_date;
        $experiences->end_date = $request->end_date;
        $experiences->update(); 
        return redirect()->route('admin.experiences.index')->with('success', 'Experience updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();
        return redirect()->route('admin.experiences.index')->with('success', 'Testimonial deleted successfully.');
    }
}
