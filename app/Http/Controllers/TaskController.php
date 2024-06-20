<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function store(Request $request,$id)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        // Create a new task
        $task = new Task();
        $task->project_id = $id;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->progress = 0;
        $task->duration = 0;
        $task->save();

        // Redirect to a success page or back to the form
        return redirect()->route('man-tasks')->with('success', 'Task created successfully!');
    }

    public function editTask($id)
    {
        $validatedData = request()->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        $task = Task::findOrFail($id);
        $task->name = $validatedData['name'];
        $task->description = $validatedData['description'];
        $task->save();

        return redirect()->route('man-tasks')->with('success', 'Task updated successfully');
    }

    public function updateProgress($id)
    {
        $validatedData = request()->validate([
            'progress' => 'required',
            'duration' => 'required',
        ]);

        $task = Task::findOrFail($id);
        $task->progress = $validatedData['progress'];
        $task->duration = $validatedData['duration'];
        $task->save();

        return redirect()->route('dev-tasks')->with('success', 'Task updated successfully');
    }
}
