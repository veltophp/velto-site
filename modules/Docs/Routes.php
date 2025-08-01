<?php

use Velto\Core\Route\Route;
use Modules\Docs\Controllers\DocsController;


// Route::get('/docs', [DocsController::class, 'docs'])->name('docs');
// Route::get('/docs/{page}', [DocsController::class, 'docs']);

Route::get('/docs', function () {
    return (new DocsController)->docs('index');
})->name('docs');

Route::get('/docs/{a}/{b}', function ($a, $b) {
    $controller = new DocsController();
    return $controller->docs("$a/$b");
});

