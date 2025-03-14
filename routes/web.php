<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\StudentsController;
use App\Http\Middleware\AuthCheck;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

// Auth
Route::get('/login', [AuthController::class, 'index'])->name(('auth.index'));
Route::post('/user-login', [AuthController::class, 'login'])->name('auth.login');

Route::middleware([AuthCheck::class])->group(function () {
    // View
    Route::get('/students', [StudentsController::class, 'myWelcomeView'])->name('std.myWelcomeView');
    // Create
    Route::post('/create', [StudentsController::class, 'createNewStd'])->name('std.createNew');

    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
