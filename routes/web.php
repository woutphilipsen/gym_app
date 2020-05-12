<?php

use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [DashboardController::class, 'index']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
