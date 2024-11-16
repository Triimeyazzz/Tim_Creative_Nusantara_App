<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\OurTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = OurTeam::all();
        return view('our_team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('our_team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'job' => 'required|string|max:255',
                'description' => 'required|string',
            ]);

            OurTeam::create([
                'name' => $request->name,
                'job' => $request->job,
                'description' => $request->description,
            ]);

            return redirect()->route('our_team.index')->with('success', 'Team member added successfully.');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teamMember = OurTeam::findOrFail($id);
        return view('our_team.show', compact('teamMember'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teamMember = OurTeam::findOrFail($id);
        return view('our_team.edit', compact('teamMember'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'job' => 'required|string|max:255',
                'description' => 'required|string',
            ]);

            $teamMember = OurTeam::findOrFail($id);
            $teamMember->update([
                'name' => $request->name,
                'job' => $request->job,
                'description' => $request->description,
            ]);

            return redirect()->route('our_team.index')->with('success', 'Team member updated successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teamMember = OurTeam::findOrFail($id);
        $teamMember->delete();

        return redirect()->route('our_team.index')->with('success', 'Team member deleted successfully.');
    }
}
