<?php

use Velto\Core\Route\Route;
use Velto\Core\Middleware\Auth;
use Velto\App\Middleware\Admin;
use Modules\VeltoAdmin\Controllers\VeltoAdminController;



Route::group(['middleware' => [Auth::class, Admin::class]], function () {


    Route::get('/velto/admin', [VeltoAdminController::class, 'veltoAdmin'])->name('veltoadmin');

    Route::post('/soft/delete', [VeltoAdminController::class, 'softDelete'])->name('soft.delete');

    Route::post('/user/update/{username}', [VeltoAdminController::class, 'userUpdate'])->name('user.update');

    Route::post('/admin/thread/delete/{slug}', [VeltoAdminController::class, 'deleteThread'])->name('admin.delete.thread');

    Route::get('/search/user', [VeltoAdminController::class, 'searchUser'])->name('search.user');

});