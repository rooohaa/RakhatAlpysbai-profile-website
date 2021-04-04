<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function sendEmail() {
        $data = [
            'title' => 'Mail from Rakhat',
            'body' => 'Just testing email functionality'
        ];

        Mail::to("rlxrlx989@gmail.com")->send(new TestMail($data));
        return "EMAIL SENt";
    }
}
