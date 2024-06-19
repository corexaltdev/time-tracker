<?php

namespace App\Http\Controllers;

use App\Models\Project; // Import the Project model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Create a new project
        $project = new Project();
        $project->user_id = Auth::id(); // Assign the current user's ID
        $project->name = $request->name;
        $project->description = $request->description;
        $project->status = "request";
        $project->save();

        // Redirect to a success page or back to the form
        return redirect()->route('cl-view-project')->with('success', 'Project created successfully!');
    }

    public function updateFeedback($id)
    {
        $validatedData = request()->validate([
            'feedback' => 'required|string',
        ]);

        // Update the feedback in the database
        $project = Project::findOrFail($id);
        $project->feedback = $validatedData['feedback'];
        $project->save();

        return redirect()->route('cl-view-project', ['id' => $id])->with('success', 'Feedback updated successfully');
    }

    public function updateStatus($id)
    {

        $project = Project::findOrFail($id);
        $project->status = "approved";
        $project->save();

        return redirect()->route('man-projects', ['id' => $id])->with('success', 'Project updated successfully');
    }
}
