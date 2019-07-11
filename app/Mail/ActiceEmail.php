<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActiceEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataInput)
    {
        $this->data = $dataInput;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('hnam.vuong@gmail.com')
            ->subject('There is a new ticket!')
            ->view('emails.ticket')
            ->with('data');
    }
}
