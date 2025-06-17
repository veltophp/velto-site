<?php

/**
 * Web Routes
 *
 * Define all HTTP routes accessible via the browser here.
 * These routes map URIs to controllers and methods that handle the request.
 */

use Velto\Core\Route;


Route::get('/', 'HomeController::index')->name('home');
Route::get('/contact', 'PagesController::contact')->name('contact');

Route::get('/docs', 'DocsController::docs')->name('docs');
Route::get('/docs/{folder}/{file}', 'DocsController::welcome')->name('docs.welcome');

Route::post('/contact', 'PagesController::contactSend')->name('contact.send');



Route::get('/coin', fn () => view('coin'));