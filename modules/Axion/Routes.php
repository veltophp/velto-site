<?php

use Velto\Core\Route\Route;
use Velto\Core\Middleware\Auth;
use Modules\Axion\Controllers\AxionController;


Route::group(['middleware' => [Auth::class]], function () {

    Route::get('/axion', [AxionController::class, 'axionDashboard'])->name('axion.dashboard');
    Route::get('/axion/thread', [AxionController::class, 'axionThread'])->name('axion.thread');
    Route::get('/axion/activity', [AxionController::class, 'axionActivity'])->name('axion.activity');

    Route::get('/axion/profile', [AxionController::class, 'axionProfile'])->name('axion.profile');

    Route::post('/delete-account', [AxionController::class, 'deleteAccount'])->name('delete.account');
    Route::post('/change-password', [AxionController::class, 'changePassword'])->name('axion.change.password');
    Route::post('/update-name', [AxionController::class, 'updateName'])->name('axion.update.name');

});
