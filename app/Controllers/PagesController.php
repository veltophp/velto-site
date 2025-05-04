<?php

namespace App\Controllers;

use Velto\Core\Controller;
use Velto\Core\Mail;


class PagesController extends Controller
{


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