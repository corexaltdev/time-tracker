<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Task;
use App\Models\Team;
use App\Models\Message;
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

    public function chat()
    {
        $role = Auth::user()->role;
        $devs = User::where('role','developer')->whereNotIn('id', [Auth::id()])->get();
        $msg = [];
        return view('page.developer.dev-chat',['role' => $role,'devs'=>$devs, 'msg'=> $msg]);
    }

    public function message($id)
    {
        $role = Auth::user()->role;
        $devs = User::where('role','developer')->whereNotIn('id', [Auth::id()])->get();
        
        $msg1 = Message::where('user_id_1', Auth::id())
        ->where('user_id_2', $id)
        ->get();

        $msg2 = Message::where('user_id_2', Auth::id())
        ->where('user_id_1', $id)
        ->get();

        $msg = ($msg1->merge($msg2))->sortBy('created_at');

        return view('page.developer.dev-chat',['role' => $role,'devs'=>$devs, 'msg'=> $msg, 'id' => $id]);
    }

    public function sendMessage(Request $request,$id)
    {

        $request->validate([
            'content' => 'required|string',
        ]);
        
        $message = new Message();
        $message->user_id_1 = Auth::id();
        $message->user_id_2 = $id;
        $message->author = 0;
        $message->content = $request->content;
        $message->save();

        return redirect()->route('dev-message', ['id' => $id])->with('success', 'Message Sent successfully');
    }

    // public function team()
    // {
    //     $role = Auth::user()->role;
    //     $teams = Team::all();

    //     return view('page.developer.dev-team',['role' => $role, 'teams' => $teams]);
    // }

    // public function teamCreate()
    // {
    //     $role = Auth::user()->role;

    //     return view('page.developer.dev-team-create',['role' => $role]);
    // }

    // public function createTeam(Request $request)
    // {
        
    //     $request->validate([
    //         'name' => 'required|',
    //     ]);

    //     $team = new Team();
    //     $team->name = $request->name;
    //     $team->save();

    //     // Redirect to a success page or back to the form
    //     return redirect()->route('dev-team')->with('success', 'Team created successfully!');
    // }

    // public function joinTeam($id)
    // {
    
    //     $info = new PersonalInfo();
    //     $info->user_id = Auth::id();
    //     $info->team_id = $id;
    //     $info->save();

    //     // Redirect to a success page or back to the form
    //     return redirect()->route('dev-team')->with('success', 'Team joined successfully!');
    // }
}
