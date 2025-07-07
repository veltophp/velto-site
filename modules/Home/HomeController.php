<?php

namespace Modules\Home;

use Velto\Core\Controller\Controller;
use Velto\Core\Request\Request;
class HomeController extends Controller
{
    public function home()
    {
        $message = "VeltoPHP is a lightweight and straightforward PHP framework designed for building reliable web applications. 
                    Whether you're creating a simple website or a modular application, VeltoPHP V2 supports full-stack development with a clean and familiar HMVC structure.";

        return view('home.home')->compact($message);

    }

    public function documentation()
    {
        return view('home.documentation');
    }


    public function community()
    {
        return view('home.community');
    }
}