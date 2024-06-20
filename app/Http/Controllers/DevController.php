<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class DevController extends Controller
{
    public function modifyInfo()
    {
        $role = Auth::user()->role;
        $user = Auth::user();

        return view('page.developer.dev-modify-info',['role' => $role, 'user' => $user]);
    }

    public function tasks()
    {
        $role = Auth::user()->role;
        $projects = Project::where('status', 'approved')->get();
        $tasks = [];
        return view('page.developer.dev-tasks',['role' => $role, 'projects' => $projects, 'tasks' => $tasks]);
    }

    public function updateTasks($id)
    {
        $role = Auth::user()->role;
        $task = Task::findOrFail($id);
        return view('page.developer.dev-update-tasks',['role' => $role, 'task' => $task, 'id' => $id]);
    }

    public function displayTasks($id)
    {
        $role = Auth::user()->role;
        $projects = Project::where('status', 'approved')->get();
        $tasks = Task::where('project_id', $id)->get();
        return view('page.developer.dev-tasks',['role' => $role, 'projects' => $projects, 'tasks' => $tasks]);
    }
}
