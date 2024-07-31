<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\CategoryController;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::middleware(['guest'])->group(function () {

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'administrator'
])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Admin/Dashboard');
    })->name('dashboard');

    Route::resource('categories', CategoryController::class)->except([
        'create',
        'show'
    ]);


});
