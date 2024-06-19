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
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DevController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;


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

    Route::get('/ad-manage-account', [AdminController::class, 'manageAccount'])->name('ad-manage-account');
    Route::get('/ad-create-account', [AdminController::class, 'createAccount'])->name('ad-create-account');
    Route::get('/ad-edit-account/{id}', [AdminController::class, 'editAccount'])->name('ad-edit-account');

    Route::post('/create-acc', [UserController::class, 'store'])->name('create-acc');
    Route::put('/ad-edit-account/{id}/edit', [UserController::class, 'update'])->name('edit-acc');
    Route::delete('/del-acc/{id}', [UserController::class, 'destroy'])->name('del-acc');

});

Route::middleware(['auth', 'verified', OnlyClient::class])->group(function () {

    Route::get('/cl-view-project', [ClientController::class, 'viewProject'])->name('cl-view-project');
    Route::get('/cl-request-project', [ClientController::class, 'requestProject'])->name('cl-request-project');
    Route::get('/cl-feedback/{id}', [ClientController::class, 'feedback'])->name('cl-feedback');

    Route::post('/request-project', [ProjectController::class, 'store'])->name('request-project');
    Route::patch('/cl-feedback/{id}/update-feedback', [ProjectController::class, 'updateFeedback'])->name('update-feedback');

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

    Route::get('/man-clients', [ManagerController::class, 'viewClients'])->name('man-clients');
    Route::get('/man-projects', [ManagerController::class, 'viewProjects'])->name('man-projects');
    Route::get('/man-tasks', [ManagerController::class, 'viewTasks'])->name('man-tasks');

    Route::get('/man-create-client', [ManagerController::class, 'createClient'])->name('man-create-client');
    Route::get('/man-create-task', [ManagerController::class, 'createTask'])->name('man-create-task');

    Route::get('/man-edit-client/{id}', [ManagerController::class, 'editClient'])->name('man-edit-client');
    Route::get('/man-edit-task', [ManagerController::class, 'editTask'])->name('man-edit-task');

    Route::get('/man-update-projects/{id}', [ManagerController::class, 'updateProjects'])->name('man-update-projects');

    Route::post('/create-cl', [UserController::class, 'store'])->name('create-cl');
    Route::put('/man-edit-client/{id}/edit', [UserController::class, 'update'])->name('edit-cl');
    Route::patch('/suspend-cl/{id}', [UserController::class, 'suspend'])->name('suspend-cl');

    Route::patch('/update-project/{id}', [ProjectController::class, 'updateStatus'])->name('update-project');

});

Route::get('/no-access', function () {
    $role = Auth::user()->role; 
    return view('page.no-access', ['role' => $role]);
});

require __DIR__.'/auth.php';
