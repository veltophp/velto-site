<?php

/**
 * Class HomeController in namespace App\Controllers.
 *
 * Structure:
 * - Extends the base `Controller` class from the `Velto\Core` namespace.
 * - Defines two public methods: `index()` and `example()`.
 *
 * How it works:
 * - `index()`:
 * - Sets the value of the `$title` variable to 'Velto'.
 * - Calls the `view()` function (presumably a helper function provided by the framework) to render the 'home' view and passes the `$title` variable to the view.
 * - Returns the result of the `view()` function, which is likely the rendered HTML content of the view.
 *
 * - `example()`:
 * - Sets the value of the `$title` variable to 'Example Page'.
 * - Calls the `view()` function to render the 'pages.example-page' view and passes the `$title` variable to the view.
 * - Returns the rendered HTML content of the view.
 *
 * In essence, this controller handles requests for the home page and an example page, setting a title and rendering the appropriate view for each.
 */

namespace App\Controllers;

use Velto\Core\Controller;


class HomeController extends Controller {
    public function index() {

        $title = 'Velto';

        return view('home', [
            
            'title' => $title
        
        ]);

    }


    public function example() {

        $title = 'Example Page';

        return view ('pages.example-page',['title' => $title]);

    }

}
