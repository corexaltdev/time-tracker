<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

    public function viewProject()
    {
        $role = Auth::user()->role;
        $projects = Project::where('user_id', Auth::id())->get();
        return view('page.client.cl-view-project', ['role' => $role,'projects' => $projects]);
    }

    public function requestProject()
    {   
        $role = Auth::user()->role;
        return view('page.client.cl-request-project',['role' => $role]);
    }

    public function feedback($id)
    {   
        $role = Auth::user()->role;
        return view('page.client.cl-feedback',['role' => $role,'id' => $id]);
    }
}
