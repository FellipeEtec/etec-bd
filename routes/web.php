<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

// Page's routes

Route::get(
    '/',
    [IndexController::class, 'index']
)->name('index');

Route::get(
    '/cursos',
    [IndexController::class, 'courses']
)->name('courses');

Route::get(
    '/departamentos',
    [IndexController::class, 'departments']
)->name('departments');

Route::get(
    '/contato',
    [IndexController::class, 'contact']
)->name('contact');

// Redirects

Route::get('/home', function () {
    return redirect()->action([IndexController::class, 'index']);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
