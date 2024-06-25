<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Index', []);
})->name('index');

Route::get('/test', function () {
    return Inertia::render('Test', []);
})->name('test');
