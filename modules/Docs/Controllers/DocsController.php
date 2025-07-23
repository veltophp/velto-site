<?php

namespace Modules\Docs\Controllers;

use Velto\Core\Controller\Controller;
use Velto\Core\Request\Request;
use Modules\Auth\Models\Docs;

class DocsController extends Controller
{
    public function docs()
    {
        return view('docs.docs');
    }
}