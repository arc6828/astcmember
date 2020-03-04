<?php

namespace App\Mail;
use App\Summary_evaluation;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SummaryMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->summary_evaluation =$summary_evaluation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $summary_evaluation = $this->summary_evaluation;
        return $this->subject('บทความของคุณต้องแก้ไข ')
        ->view('summary_evaluation.summary_evaluationmail', compact('summary_evaluation') );
    }
}
