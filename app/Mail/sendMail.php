<?php

namespace App\Mail;

use App\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $users;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($users)
    {
        //
        $this->users=$users;

    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this->view('emails.name');

    }
}
