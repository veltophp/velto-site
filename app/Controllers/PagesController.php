<?php

namespace App\Controllers;

use Velto\Core\Controller;
use Velto\Core\Mail;


class PagesController extends Controller
{
    public function example() {
        $title = 'Example Page';
    
        $examples = require BASE_PATH . '/app/data/example-data.php';
    
        return view('pages.example-page', [
            'title' => $title,
            'examples' => $examples
        ]);
    }    


    public function example_1() {

        return view('pages.example-1');
    }

    public function example_2() {

        return view('pages.example-2');
    }

    public function example_3() {

        return view('pages.example-3');
    }

    public function example_4() {

        return view('pages.example-4');
    }

    public function example_5() {

        return view('pages.example-5');
    }

    public function example_6() {

        return view('pages.example-6');
    }


    public function contact() {

        return view('pages.contact');
    }


    public function about() {

        return view('pages.about');
    }


    public function contact_send()
    {
        $data = [
            'name' => request()->input('name'),
            'email' => request()->input('email'),
            'message' => request()->input('message'),
        ];

        $to = 'danayasa2@gmail.com';
        $subject = 'New Contact Form Submission';
        $template = 'contact-mail';

        $send = Mail::send($to, $subject, $template, $data);

        if ($send) {
                return redirect('/contact?status=success'); 

            } else {
            
                return redirect('/contact?status=fail'); 
        }

    }
}