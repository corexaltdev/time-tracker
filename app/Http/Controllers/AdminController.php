<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function manageAccount()
    {
        $role = Auth::user()->role;
        $users = User::all();
        return view('page.admin.ad-manage-account', ['role' => $role,'users' => $users]);
    }

    public function createAccount()
    {
        $role = Auth::user()->role;
        return view('page.admin.ad-create-account', ['role' => $role]);
    }

    public function editAccount($id)
    {
        $role = Auth::user()->role;
        $user = User::findOrFail($id);
        return view('page.admin.ad-edit-account', ['role' => $role,'user' => $user]);
    }
}
