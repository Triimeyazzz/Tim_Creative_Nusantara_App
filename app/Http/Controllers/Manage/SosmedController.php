<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\OurTeam;
use App\Models\Sosmed;
use Illuminate\Http\Request;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sosmeds = Sosmed::with('ourTeam')->get();
        return view('sosmed.index', compact('sosmeds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = OurTeam::all();
        return view('sosmed.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'our_team_id' => 'required|exists:our_team,id',
            'sosmed' => 'required|string|max:255',
            'url' => 'required|url',
        ]);

        Sosmed::create([
            'our_team_id' => $request->our_team_id,
            'sosmed' => $request->sosmed,
            'url' => $request->url,
        ]);

        return redirect()->route('admin.sosmed.index')->with('success', 'Sosmed created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sosmed = Sosmed::with('ourTeam')->findOrFail($id);
        return view('sosmed.show', compact('sosmed'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sosmed = Sosmed::findOrFail($id);
        $teams = OurTeam::all();
        return view('sosmed.edit', compact('sosmed', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'our_team_id' => 'required|exists:our_team,id',
            'sosmed' => 'required|string|max:255',
            'url' => 'required|url',
        ]);

        $sosmed = Sosmed::findOrFail($id);
        $sosmed->update([
            'our_team_id' => $request->our_team_id,
            'sosmed' => $request->sosmed,
            'url' => $request->url,
        ]);
        // dd($bisakah);

        return redirect()->route('admin.sosmed.index')->with('success', 'Sosmed updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sosmed = Sosmed::findOrFail($id);
        $sosmed->delete();

        return redirect()->route('admin.sosmed.index')->with('success', 'Sosmed deleted successfully');
    }
}
