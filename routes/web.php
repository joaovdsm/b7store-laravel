<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_action']);
// Route::get('/register', function() { return view('auth.register'); })->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_action']);

Route::get('/select-state', [AuthController::class, 'state'])->name('select-state');
Route::post('/select-state', [AuthController::class, 'state_action']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', function() {
    return view('auth.forgot-password');
})->name('forgot-password');

Route::get('/dashboard/my-account', [DashboardController::class, 'my_account'])->name('my-account');
Route::post('/dashboard/my-account', [DashboardController::class, 'my_account_action']);