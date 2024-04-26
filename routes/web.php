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


Route::get('/dev-modify-info', function () {
    return view('page.developer.dev-modify-info');
});