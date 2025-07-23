<?php

use Velto\Core\Route\Route;
use Modules\Docs\Controllers\DocsController;

Route::get('/docs', [DocsController::class, 'docs'])->name('docs');