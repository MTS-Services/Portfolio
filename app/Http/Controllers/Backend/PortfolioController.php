<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use App\Models\Portfolio_Category;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest()->with('category')->get();
        return view('backend.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $portfolio_categories = Portfolio_Category::all();
        return view('backend.portfolios.create', compact('portfolio_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortfolioRequest $request)
    {
        $portfolios = new Portfolio();
        $portfolios->category_id = $request->category_id;
        $portfolios->source_url = $request->source_url;
        $portfolios->live_url = $request->live_url;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/images/portfolios'), $imageName);
            $portfolios->image = $imageName;
        }
        $portfolios->save();
        return redirect()->route('admin.portfolios.index')->with('success', 'portfolio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $portfolios = Portfolio::findOrFail($id);
        return view('backend.portfolios.show', compact('portfolios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portfolios = Portfolio::findOrFail($id);
        $portfolio_categories = Portfolio_Category::all();
        return view('backend.portfolios.edit', compact('portfolios', 'portfolio_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $portfolios = Portfolio::findOrFail($id);
        $portfolios->category_id = $request->category_id;
        $portfolios->source_url = $request->source_url;
        $portfolios->live_url = $request->live_url;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/images/portfolios'), $imageName);
            $portfolios->image = $imageName;
        }

        $portfolios->update();

        return redirect()->route('admin.portfolios.index')->with('success', 'portfolio updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolios = Portfolio::findOrFail($id);
        $portfolios->delete();
        return redirect()->route('admin.portfolios.index')->with('success', 'portfolio deleted successfully.');
    }
}
