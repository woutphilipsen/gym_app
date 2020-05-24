<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ReminderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

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
    Route::get('/leads/view/{lead}/reminder/{reminder}/view', [ReminderController::class, 'view'])->name('reminder.view');
    Route::post('/leads/view/reminder/update', [ReminderController::class, 'updateAndCreate'])->name('reminder.update');
    Route::get('/leads/view/{lead}/reminder/{reminder}/note', [ReminderController::class, 'addNote'])->name('reminder.note');
    Route::post('/leads/view/reminder/close', [ReminderController::class, 'close'])->name('reminder.close');

    Route::get('/packages/list', [PackageController::class, 'index'])->name('package.list');
    Route::post('/packages/save', [PackageController::class, 'store'])->name('package.save');
    Route::get('/packages/view/{package}', [PackageController::class, 'view'])->name('package.view');
    Route::post('/packages/update', [PackageController::class, 'update'])->name('package.update');
});

Auth::routes();