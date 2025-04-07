<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::get();
        if (request()->ajax()) {
            return view('admin.ajaxComponents.team_table', compact('teams'))->render();
        }
        return view('admin.pages.team.index', compact('teams'));
    }

    public function store(Request $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/teams/';
            $file->move($path, $filename);
        }

        $teamData = [
            'name'          => $request->name,
            'designation'   => $request->designation,
            'social_link'   => $request->social_link,
            'linkedin_link' => $request->linkedin_link,
            'image_path'    => $path . $filename
        ];

        $team = Team::create($teamData);
        if ($team) {
            return response()->json(['status' => 'success', 'message' => "Team created successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "something went wrong"]);
        }
    }

    public function edit(String $id)
    {
        $teams = Team::find($id);
        return view('admin.pages.team.edit', compact('teams'));
    }

    public function update(Request $request, string $id)
    {
        // Validate the request data
        // $validatedData = $request->validate([
        //     'name'          => 'required|string|max:255',
        //     'designation'   => 'required|string|max:255',
        //     'image'         => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'social_link'   => 'nullable|url',
        //     'linkedin_link' => 'nullable|url',
        // ]);
        // Find the team record or fail
        $team = Team::findOrFail($id);
        // Update fields        
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->social_link = $request->social_link;
        $team->linkedin_link = $request->linkedin_link;
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if (!empty($team->image_path) && file_exists(public_path($team->image_path))) {
                File::delete(public_path($team->image_path));
            }
            // Save new image
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = 'uploads/teams/';
            $file->move(public_path($path), $filename);
            // Update image path
            $team->image_path = $path . $filename;
        }
        // Save changes to the database
        $team->save();
        // Redirect back with a success message
        return redirect()->route('admin.team')->with('success', 'Team updated successfully.');
    }

    public function destroy(Request $request)
    {
        $team =  Team::find($request->id);

        if (file_exists($team->image_path)) {
            File::delete($team->image_path);
        }
        if ($team->delete()) {
            return response()->json(['status' => 'success', 'message' => "Portfolio deleted successfully"]);
        } else {
            return response()->json(['status' => 'error', 'message' => "something went wrong"]);
        }
    }
}
