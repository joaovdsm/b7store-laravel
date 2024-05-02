<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdController;

Route::get('/', function () { return view('home'); })->name('home');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_action']);
// Route::get('/register', function() { return view('auth.register'); })->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_action']);

Route::get('/forgot-password', function() { return view('auth.forgot-password'); })->name('forgot-password');

Route::get('/ad/{slug}', [AdController::class, 'show'])->name('ad-show');

Route::get('/list', [AdController::class, 'list'])->name('ad-list');
Route::get('/category/{slug}', [AdController::class, 'category'])->name('ad-category');

Route::middleware(['auth'])->group(function () {
    Route::get('/select-state', [AuthController::class, 'state'])->name('select-state');
    Route::post('/select-state', [AuthController::class, 'state_action']);
    
    // Dashboard
    Route::get('/dashboard/my-ads', [DashboardController::class, 'my_ads'])->name('my-ads');
    Route::post('/dashboard/my-ads', [DashboardController::class, 'my_ads_action']);

    Route::get('/dashboard/my-account', [DashboardController::class, 'my_account'])->name('my-account');
    Route::post('/dashboard/my-account', [DashboardController::class, 'my_account_action']);

    // Advertise
    Route::get('/dashboard/advertise', [AdController::class, 'create'])->name('ad-create');
    Route::post('/dashboard/advertise', [AdController::class, 'advertise_action']);

    Route::get('/dashboard/ad/delete/{id}', [AdController::class, 'delete'])->name('ad-delete');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});