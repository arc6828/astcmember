<?php

namespace App\Mail;
use App\Reviewer;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReviewerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reviewer $reviewer)
    {
        $this->reviewer =$reviewer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $reviewer = $this->reviewer;
        return $this->subject('เรียนเชิญเข้าร่วมการประเมินให้คะแนนบทความในงานประชุมวิชาการ ASTC2020 ')
        ->view('reviewer.reviewermail', compact('reviewer') );
    }
}
