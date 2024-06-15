<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

use App\Http\Middleware\OnlyAdmin;
use App\Http\Middleware\OnlyClient;
use App\Http\Middleware\OnlyDeveloper;
use App\Http\Middleware\OnlyManager;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;


Route::get('/', function () {
    // return Inertia::render('Welcome', [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]);
    
    return redirect('login');
});

Route::get('/dashboard', function () {
    $role = Auth::user()->role; 
    return view('page.dashboard',  ['role' => $role]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified',OnlyAdmin::class])->group(function () { 

    Route::get('/ad-manage-account', function () {
        $role = Auth::user()->role;
        return view('page.admin.ad-manage-account', ['role' => $role]);
    })->name('ad-manage-account');

    Route::get('/ad-create-account', function () {
        $role = Auth::user()->role;
        return view('page.admin.ad-create-account', ['role' => $role]);
    })->name('ad-create-account');

    Route::get('/ad-edit-account', function () {
        $role = Auth::user()->role;
        return view('page.admin.ad-edit-account', ['role' => $role]);
    })->name('ad-edit-account');

});

Route::middleware(['auth', 'verified', OnlyClient::class])->group(function () {

    Route::get('/cl-view-project', [ClientController::class, 'viewProject'])->name('cl-view-project');

    Route::get('/cl-request-project', [ClientController::class, 'requestProject'])->name('cl-request-project');

    Route::get('/cl-feedback', [ClientController::class, 'feedback'])->name('cl-feedback');

    Route::post('/request-project', [ProjectController::class, 'store'])->name('request-project');

});

Route::middleware(['auth', 'verified', OnlyDeveloper::class])->group(function () {
    
    Route::get('/dev-modify-info', function () {
        $role = Auth::user()->role; 
        return view('page.developer.dev-modify-info',['role' => $role]);
    })->name('dev-modify-info');

    Route::get('/dev-tasks', function () {
        $role = Auth::user()->role; 
        return view('page.developer.dev-tasks',['role' => $role]);
    })->name('dev-tasks');

    Route::get('/dev-update-tasks', function () {
        $role = Auth::user()->role; 
        return view('page.developer.dev-update-tasks',['role' => $role]);
    })->name('dev-update-tasks');

});

Route::middleware(['auth', 'verified',OnlyManager::class])->group(function () {

    Route::get('/man-clients', function () {
        $role = Auth::user()->role; 
        return view('page.manager.man-clients',['role' => $role]);
    })->name('man-clients');

    Route::get('/man-create-client', function () {
        $role = Auth::user()->role; 
        return view('page.manager.man-create-client',['role' => $role]);
    })->name('man-create-client');

    Route::get('/man-create-task', function () {
        $role = Auth::user()->role; 
        return view('page.manager.man-create-task',['role' => $role]);
    })->name('man-create-task');

    Route::get('/man-edit-client', function () {
        $role = Auth::user()->role; 
        return view('page.manager.man-edit-client',['role' => $role]);
    })->name('man-edit-client');

    Route::get('/man-edit-task', function () {
        $role = Auth::user()->role; 
        return view('page.manager.man-edit-task',['role' => $role]);
    })->name('man-edit-task');

    Route::get('/man-projects', function () {
        $role = Auth::user()->role; 
        return view('page.manager.man-projects',['role' => $role]);
    })->name('man-projects');

    Route::get('/man-tasks', function () {
        $role = Auth::user()->role; 
        return view('page.manager.man-tasks',['role' => $role]);
    })->name('man-tasks');

    Route::get('/man-update-project', function () {
        $role = Auth::user()->role; 
        return view('page.manager.man-update-project',['role' => $role]);
    })->name('man-update-projects');

});

Route::get('/no-access', function () {
    $role = Auth::user()->role; 
    return view('page.no-access', ['role' => $role]);
});

require __DIR__.'/auth.php';
