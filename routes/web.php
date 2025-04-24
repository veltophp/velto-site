<?php

use Velto\Core\Route;

Route::get('/', 'HomeController@index');
Route::get('/example', 'HomeController@example');


// Route for documentation veltoPHP Version 1.x 
Route::get('/docs/home', 'DocsController@docs');
Route::get('/docs/pre-requisites', 'DocsController@pre_requisites');
Route::get('/docs/installation', 'DocsController@installation');


