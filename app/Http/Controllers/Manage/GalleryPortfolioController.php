<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Gallery_Portfolio;
use Illuminate\Http\Request;

class GalleryPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Gallery_Portfolio::all();
        return view('gallery_portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery_portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        Gallery_Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('gallery_portfolio.index')->with('success', 'Portfolio created successfully.');
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
        $portfolio = Gallery_Portfolio::findOrFail($id);
        return view('gallery_portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gallery = Gallery_Portfolio::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $gallery->image = $imageName;
        }

        $gallery->name = $request->name;
        $gallery->description = $request->description;
        $gallery->save();

        return redirect()->route('gallery_portfolio.index')->with('success', 'Gallery Portfolio updated successfully.');
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

        return redirect()->route('gallery_portfolio.index')->with('success', 'Gallery Portfolio deleted successfully.');
    }
}
