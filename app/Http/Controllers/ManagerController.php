<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function manageAccount()
    {
        $role = Auth::user()->role;
        return view('page.client.cl-view-project', ['role' => $role,'users' => $users]);
    }
}
