<?php


use App\Http\Controllers\AuthController;

Route::get('/',[AuthController::class, 'ShowLogin'])->name('login');
Route::post('/', [AuthController::class, 'Login']);
Route::get('/register', [AuthController::class, 'ShowRegister'])->name('register');
Route::post('/register', [AuthController::class, 'Register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'role:admin'])->get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
Route::middleware(['auth', 'role:user'])->get('/user/dashboard', fn() => view('user.dashboard'))->name('user.dashboard');

