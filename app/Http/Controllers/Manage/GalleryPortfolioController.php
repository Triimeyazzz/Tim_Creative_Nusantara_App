<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Gallery_Portfolio;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class GalleryPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Gallery_Portfolio::with('portfolio')->get();
        return view('gallery_portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $portfolios = Portfolio::all();
        return view('gallery_portfolio.create', compact('portfolios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'portfolio_id' => 'required|exists:portfolio,id',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        Gallery_Portfolio::create([
            'portfolio_id' => $request->portfolio_id,
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.gallery_portfolio.index')->with('success', 'Portfolio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $portfolio = Gallery_Portfolio::findOrFail($id);
        return view('gallery_portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gallery = Gallery_Portfolio::findOrFail($id);
        $portfolios = Portfolio::all();
        return view('gallery_portfolio.edit', compact('gallery','portfolios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'portfolio_id' => 'required',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = Gallery_Portfolio::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('gallery', 'public');
            $gallery->image_path = $imagePath;
        }

        $gallery->portfolio_id = $request->portfolio_id;
        $gallery->description = $request->description;
        $gallery->save();

        return redirect()->route('admin.gallery_portfolio.index')->with('success', 'Gallery Portfolio updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery_Portfolio::findOrFail($id);
        if (file_exists(public_path('images/' . $gallery->image))) {
            unlink(public_path('images/' . $gallery->image));
        }
        $gallery->delete();

        return redirect()->route('admin.gallery_portfolio.index')->with('success', 'Gallery Portfolio deleted successfully.');
    }
}
