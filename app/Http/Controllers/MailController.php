<?php

namespace App\Http\Controllers;

use App\Mail\resetMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendMail()
    {
        $mailData = [
            'title' => 'Mail from Mini-SMS',
            'body' => 'ResetBody'
        ];

        Mail::to('terenceugoq@gmail.com')->send(new resetMail($mailData));

        dd("Email is sent successfully.");
    }
}
