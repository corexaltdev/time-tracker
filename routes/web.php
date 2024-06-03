<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('page.dashboard');
});

Route::get('/ad-manage-account', function () {
    return view('page.admin.ad-manage-account');
});

Route::get('/cl-view-project', function () {
    return view('page.client.cl-view-project');
});

Route::get('/dev-tasks', function () {
    return view('page.developer.dev-tasks');
});

Route::get('/dev-update-tasks', function () {
    return view('page.developer.dev-update-tasks');
});

Route::get('/dev-modify-info', function () {
    return view('page.developer.dev-modify-info');
});

Route::get('/man-clients', function () {
    return view('page.manager.man-clients');
});

Route::get('/man-create-client', function () {
    return view('page.manager.man-create-client');
});

Route::get('/man-create-task', function () {
    return view('page.manager.man-create-task');
});

Route::get('/man-edit-client', function () {
    return view('page.manager.man-edit-client');
});

Route::get('/man-edit-task', function () {
    return view('page.manager.man-edit-task');
});

Route::get('/man-projects', function () {
    return view('page.manager.man-projects');
});

Route::get('/man-tasks', function () {
    return view('page.manager.man-tasks');
});

Route::get('/man-update-project', function () {
    return view('page.manager.man-update-project');
});

require __DIR__.'/auth.php';
