<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Visitor;

class VisitorRegistered extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var App\Visitor
     */
    public $visitor;

    /**
     * Create a new message instance.
     *
     * @param  App\Visitor  $visitor
     * @return void
     */
    public function __construct(Visitor $visitor)
    {
        $this->visitor = $visitor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.visitorregistered');
    }
}
