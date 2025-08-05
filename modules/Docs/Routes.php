<?php

use Velto\Core\Route\Route;
use Modules\Docs\Controllers\DocsController;


Route::get('/docs', function () {
    return (new DocsController)->docs('documentation');
})->name('docs');

Route::get('/docs/{a}/{b}', function ($a, $b) {
    $controller = new DocsController();
    return $controller->docs("$a/$b");
});

