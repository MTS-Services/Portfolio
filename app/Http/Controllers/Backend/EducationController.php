<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\EducationRequest;
use App\Models\Education;


class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education = Education::latest()->get();
        return view('backend.education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EducationRequest $request)
    {
        $education = new Education();
        $education->title = $request->title;
        $education->institute_name = $request->institute_name;
        $education->institute_address = $request->institute_address;
        $education->description = $request->description;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->save();
        return redirect()->route('admin.education.index')->with('success', 'Education Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $education = Education::findOrFail($id);
        return view('backend.education.show', compact('education'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { $education = Education::findOrFail($id);
        return view('backend.education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EducationRequest $request, string $id)
    {
        $education = Education::findOrFail($id);
        $education->title = $request->title;
        $education->institute_name = $request->institute_name;
        $education->institute_address = $request->institute_address;
        $education->description = $request->description;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->update();
        return redirect()->route('admin.education.index')->with('success', 'Education Added Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Education::findOrFail($id);
        $education->delete();
        return redirect()->route('admin.education.index')->with('success', 'Education deleted successfully.');
    }
}
