<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

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
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register_action'])->name('register-action');
// Route::get('/register', function() { return view('auth.register'); })->name('register');

Route::get('/select-state', [AuthController::class, 'state'])->name('select-state');
Route::post('/select-state', [AuhtController::class, 'state_action'])->name('select-state-action');

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/forgot-password', function() {
    return view('auth.forgot-password');
})->name('forgot-password');