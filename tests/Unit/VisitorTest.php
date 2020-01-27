<?php

namespace Tests\Unit;

use Tests\TestCase;
use \App\Events\VisitorRegistered;
use \App\Listeners\SendVisitorRegisteredMail;
use \App\Mail\VisitorRegistered as VisitorRegisteredMail;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use \App\Visitor;
use Illuminate\Foundation\Testing\WithoutMiddleware; 

class VisitorTest extends TestCase
{
    use WithoutMiddleware;

    /** @test **/
    public function event_triggered_when_visitors_register()
    {
        Event::fake();
        
        $testVisitor = factory(Visitor::class)->create();

        $this->post('/signup', [
            'name' => $testVisitor->name,
            'email' => $testVisitor->email,
            'comments' => $testVisitor->comments,
            'num_of_passes' => $testVisitor->num_of_passes,
        ]);

        Event::assertDispatched(VisitorRegistered::class);
    }

    /** @test **/
    public function mail_sent_to_newly_registered_visitors()
    {
        Mail::fake();

        $testVisitor = factory(Visitor::class)->create();

        $this->post('/signup', [
            'name' => $testVisitor->name,
            'email' => $testVisitor->email,
            'comments' => $testVisitor->comments,
            'num_of_passes' => $testVisitor->num_of_passes,
        ]);

        Mail::assertQueued(VisitorRegisteredMail::class);
    }
}
