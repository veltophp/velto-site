<?php

use Velto\Core\Route;

Route::get('/', 'HomeController@index');

Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::post('/contact', 'PagesController@contact_send');

// Route for documentation veltoPHP Version 1.x 
Route::get('/docs/home', 'DocsController@docs');
Route::get('/docs/pre-requisites', 'DocsController@pre_requisites');
Route::get('/docs/installation', 'DocsController@installation');
Route::get('/docs/view', 'DocsController@view');



