<?php

// use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// View
Route::get('/', [StudentsController::class, 'myWelcomeView'])->name(name: 'std.myWelcomeView');

// Create
Route::post('/create', [StudentsController::class, 'createNewStd'])->name(name: 'std.createNew');
