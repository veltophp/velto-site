<?php

use Velto\Core\Route;

Route::get('/', 'HomeController@index');


Route::get('/example', 'PagesController@example');
Route::get('/example/example-1', 'PagesController@example_1');
Route::get('/example/example-2', 'PagesController@example_2');
Route::get('/example/example-3', 'PagesController@example_3');
Route::get('/example/example-4', 'PagesController@example_4');
Route::get('/example/example-5', 'PagesController@example_5');
Route::get('/example/example-6', 'PagesController@example_6');

Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::post('/contact', 'PagesController@contact_send');




// Route for documentation veltoPHP Version 1.x 
Route::get('/docs/home', 'DocsController@docs');
Route::get('/docs/pre-requisites', 'DocsController@pre_requisites');
Route::get('/docs/installation', 'DocsController@installation');


