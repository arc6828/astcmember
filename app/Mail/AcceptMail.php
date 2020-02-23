<?php

namespace App\Mail;
use App\Accept;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AcceptMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Accept $accept)
    {
        $this->accept =$accept;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $accept = $this->accept;
        return $this->subject('กรุณาประเมินผลบทความ')
        ->view('accept.acceptmail', compact('accept') );
    }
}
