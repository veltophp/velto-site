<?php

use Velto\Core\Route\Route;
use Modules\Home\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/documentation', [HomeController::class, 'documentation'])->name('documentation');
Route::get('/community', [HomeController::class, 'community'])->name('community');
