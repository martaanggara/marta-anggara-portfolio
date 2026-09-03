<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', [ProjectController::class, 'index'])->name('home');
Route::get('/work/{project:slug}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/about', [ProjectController::class, 'about'])->name('about');