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
    });

});

Route::middleware(['auth', 'verified',OnlyClient::class])->group(function () {

    Route::get('/cl-view-project', function () {
        $role = Auth::user()->role; 
        return view('page.client.cl-view-project',['role' => $role]);
    });

});

Route::middleware(['auth', 'verified',OnlyDeveloper::class])->group(function () {
    
    Route::get('/dev-modify-info', function () {
        $role = Auth::user()->role; 
        return view('page.developer.dev-modify-info');
    });

});

Route::middleware(['auth', 'verified',OnlyManager::class])->group(function () {

});

Route::get('/no-access', function () {
    $role = Auth::user()->role; 
    return view('page.no-access', ['role' => $role]);
});

require __DIR__.'/auth.php';
