<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $telephone;
    public $email;
    public $msg;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $telephone, $email, $msg)
    {
        $this->name = $name;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.created');
    }
}
