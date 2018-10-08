<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Mail\SendQueuedMailable;
use Mail;
use App\User;

class MailController extends Controller
{

    public function send()
    {
        $order=User::get();

        foreach ($order as $user)
        {
            Mail::to($user)->send(new sendMail($order));

        }

    }
}
