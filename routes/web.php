<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ReminderController;

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dash');
    Route::get('/leads', [LeadController::class, 'index']);
    Route::get('/leads/list', [LeadController::class, 'index'])->name('lead.list');

    Route::get('/leads/add', [LeadController::class, 'create'])->name('lead.add');
    Route::post('/leads/save', [LeadController::class, 'store']);

    Route::get('/leads/view/{lead}', [LeadController::class, 'view'])->name('lead.view');
    Route::post('/leads/update', [LeadController::class, 'update'])->name('lead.update');

    Route::get('/leads/view/{lead}/reminder/add', [ReminderController::class, 'add'])->name('reminder.add');
    Route::post('/leads/view/reminder/save', [ReminderController::class, 'store'])->name('reminder.save');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');