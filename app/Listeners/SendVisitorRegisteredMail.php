<?php

namespace App\Listeners;

use App\Events\VisitorRegistered;
use App\Mail\VisitorRegistered as VisitorRegisteredMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendVisitorRegisteredMail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  VisitorRegistered  $event
     * @return void
     */
    public function handle(VisitorRegistered $event)
    {
        \Mail::to($event->visitor->email)->queue(
            new VisitorRegisteredMail($event->visitor)
        );
    }
}
