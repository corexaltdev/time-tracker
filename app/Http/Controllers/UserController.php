<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
            'role' => 'required|string',
        ]);

        // Create a new user
        $user = new User;
        $user->username = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = Str::lower($request->role);
        $user->save();

        $currentUser = Auth::user();

        if ($currentUser->role == 'manager') {
            return redirect()->route('man-clients')->with('success', 'User created successfully!');
        } 

        // Redirect to a specific route or view
        return redirect()->route('ad-manage-account')->with('success', 'User created successfully!');
    }

    // Update an existing user
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'role' => 'required|string',
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Convert the name to lowercase
        $name = Str::lower($request->name);

        // Update the user details
        $user->username = $name;
        $user->email = $request->email;
        $user->role = Str::lower($request->role);

        // If the password field is filled, update the password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        $currentUser = Auth::user();

        if ($currentUser->role == 'manager') {
            return redirect()->route('man-clients')->with('success', 'User created successfully!');
        } 
        else if ($currentUser->role == 'developer') {
            return redirect()->route('dashboard')->with('success', 'User created successfully!');
        }

        // Redirect to a specific route or view
        return redirect()->route('ad-manage-account')->with('success', 'User updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('ad-manage-account')->with('success', 'User deleted successfully!');
    }

    public function suspend($id)
    {
    
        $user = User::findOrFail($id);

        if($user->role == 'client'){
            $user->role = 'clientX';
        }elseif($user->role == 'clientX'){
            $user->role = 'client';
        }

        $user->save();

        return redirect()->route('man-clients')->with('success', 'Suspension Success');
    }
}
