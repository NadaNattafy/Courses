<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;


class WelcomeController extends Controller
{
    public function mailSend() {
        
        $details = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp'
        ];
       
        \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyMail($details));
       
        dd("Email is Sent.");
    }
}