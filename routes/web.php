<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.login');
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

Route::get('/dev-modify-info', function () {
    return view('page.developer.dev-modify-info');
});

Route::get('/man-clients', function () {
    return view('page.manager.man-clients');
});

Route::get('/man-projects', function () {
    return view('page.manager.man-projects');
});


Route::get('/man-tasks', function () {
    return view('page.manager.man-tasks');
});