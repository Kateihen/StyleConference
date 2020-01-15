<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VisitorRegistered
{
	use Dispatchable, SerializesModels;

	public $visitor;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($visitor)
	{
		$this->visitor = $visitor;
	}

}
