<?php

use Velto\Core\Route\Route;
use Modules\Community\Controllers\CommunityController;
use Modules\Community\Controllers\ThreadController;
use Velto\Core\Middleware\Auth;



Route::get('/community', [CommunityController::class, 'community'])->name('community');
Route::get('/detail/thread/{slug}', [ThreadController::class, 'detailThread'])->name('detail.thread');
Route::get('/search/thread', [ThreadController::class, 'searchThread'])->name('search.thread');

Route::get('/tags/{tag}', [ThreadController::class, 'showTag'])->name('tag');
Route::get('/category/{category}', [ThreadController::class, 'showCategory'])->name('category');
Route::get('/user/{username}', [ThreadController::class, 'showUser'])->name('user');

Route::group(['middleware' => [Auth::class]], function () {

    Route::get('/thread/new', [ThreadController::class, 'newThread'])->name('new.thread');
    Route::post('/thread/submit', [ThreadController::class, 'submitThread'])->name('submit.thread');
    Route::post('/thread/delete/{slug}', [ThreadController::class, 'deleteThread'])->name('delete.thread');
    Route::post('/thread/update', [ThreadController::class, 'updateThread'])->name('update.thread');
    
    Route::post('/thread/bookmark', [ThreadController::class, 'bookmarkThread'])->name('bookmark.thread');
    Route::post('/bookmark/delete/{slug}', [ThreadController::class, 'deleteBookmark'])->name('delete.bookmark');

    Route::post('/comment/submit/{threadId}', [ThreadController::class, 'submitComment'])->name('submit.comment');

});