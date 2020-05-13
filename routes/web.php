<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dash');

    Route::get('/leads/add', [LeadController::class, 'create']);
    Route::post('/leads/save', [LeadController::class, 'store']);
    Route::get('/leads/list', [LeadController::class, 'index']);
    Route::get('/leads/view/{lead}', [LeadController::class, 'view'])->name('lead.view');
    
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');