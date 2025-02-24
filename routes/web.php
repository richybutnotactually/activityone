<?php

// use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// View
Route::get('/', [StudentsController::class, 'myWelcomeView'])->name(name: 'std.myWelcomeView');

// Create
Route::post('/create', [StudentsController::class, 'createNewStd'])->name(name: 'std.createNew');

// Update
// Route::get('/edit', [StudentsController::class, 'edit'])->name(name: 'std.edit');
Route::put('/students/{student}', [StudentsController::class, 'update'])->name(name: 'std.update');
Route::delete('/students/{student}', [StudentsController::class, 'delete'])->name(name: 'std.delete');
