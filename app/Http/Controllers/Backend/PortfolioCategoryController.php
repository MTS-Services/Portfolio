<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioCategoryRequest;
use App\Models\Portfolio_Category;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolio_categories = Portfolio_Category::latest()->get();
        return view('backend.portfolioCategories.index', compact('portfolio_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.portfolioCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortfolioCategoryRequest $request)
    {
        $PortfolioCategory = new Portfolio_Category();
        $PortfolioCategory->name = $request->name;
        $PortfolioCategory->save();
        return redirect()->route('admin.port_categories.index')->with('success', 'Portfolio Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $portfolio_categories = PortfolioCategory::findOrFail($id);
        // return view('backend.portfolioCategories.show', compact('portfolio_categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portfolio_categories = Portfolio_Category::findOrFail($id);
        return view('backend.portfolioCategories.edit', compact('portfolio_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PortfolioCategoryRequest $request, string $id)
    {
        $portfolio_categories = Portfolio_Category::findOrFail($id);
        $portfolio_categories->name = $request->name;

        $portfolio_categories->update();

        return redirect()->route('admin.port_categories.index')->with('success', 'Portfolio Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio_categories = Portfolio_Category::findOrFail($id);
        $portfolio_categories->delete();
        return redirect()->route('admin.port_categories.index')->with('success', 'Portfolio Category deleted successfully.');
    }
}
