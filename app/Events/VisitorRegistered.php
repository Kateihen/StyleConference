<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VisitorRegistered
{
    use Dispatchable, SerializesModels;

    /**
     * @var App\Visitor
     */
    public $visitor;

    /**
     * Create a new event instance.
     *
     * @param  App\Visitor $visitor
     * @return void
     */
    public function __construct($visitor)
    {
        $this->visitor = $visitor;
    }

}
