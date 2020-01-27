<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var App\Visitor
     */
    protected $visitor;

    /**
     * @var Illuminate\Mail\Mailable
     */
    protected $email;

    /**
     * Create a new job instance.
     *
     * @param  App\Visitor  $visitor
     * @return void
     */
    public function __construct(Visitor $visitor, Mailable $email)
    {
        $this->visitor = $visitor;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
