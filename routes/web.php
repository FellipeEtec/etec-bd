<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

// Page's routes

Route::get(
    '/',
    [RouteController::class, 'index']
)->name('index');

Route::get(
    '/cursos',
    [RouteController::class, 'courses']
)->name('courses');

Route::get(
    '/departamentos',
    [RouteController::class, 'departments']
)->name('departments');

Route::get(
    '/contato',
    [RouteController::class, 'contact']
)->name('contact');

// Redirects

Route::get('/home', function () {
    return redirect()->action([RouteController::class, 'index']);
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
