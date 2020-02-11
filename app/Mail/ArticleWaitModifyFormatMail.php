<?php

namespace App\Mail;
use App\Article;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ArticleWaitModifyFormatMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Article $article)
    {
        $this->article =$article;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $article = $this->article;
        //CONFIG THIS LINE OF CODE
        return $this->subject('ผลการพิจารณารูปแบบนิพนธ์ต้นฉบับ')
            ->view('mail.article_wait_modify_format', compact('article') );
    }
}
