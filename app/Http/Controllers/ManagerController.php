<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{

    public function viewClients()
    {
        $role = Auth::user()->role;
        $users = User::where('role', 'like', 'client%')->get();

        return view('page.manager.man-clients',['role' => $role,'users' => $users]);
    }

    public function viewProjects()
    {
        $role = Auth::user()->role;
        $projects = Project::all();
        return view('page.manager.man-projects',['role' => $role, 'projects' => $projects]);
    }

    public function viewTasks()
    {
        $role = Auth::user()->role;
        return view('page.manager.man-tasks',['role' => $role]);
    }

    public function createClient()
    {
        $role = Auth::user()->role;
        return view('page.manager.man-create-client',['role' => $role]);
    }

    public function createTask()
    {
        $role = Auth::user()->role;
        return view('page.manager.man-create-task',['role' => $role]);
    }

    public function editClient($id)
    {
        $role = Auth::user()->role;
        $user = User::findOrFail($id);
        return view('page.manager.man-edit-client',['role' => $role, 'user' => $user]);
    }

    public function editTask()
    {
        $role = Auth::user()->role;
        return view('page.manager.man-edit-task',['role' => $role]);
    }

    public function updateProjects($id)
    {
        $role = Auth::user()->role;
        $project = Project::findOrFail($id);
        return view('page.manager.man-update-project',['role' => $role, 'project' => $project, 'id'=> $id]);
    }
}
