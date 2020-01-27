<?php

namespace Tests\Feature;

use \App\Events\VisitorRegistered;
use Illuminate\Support\Facades\Event;
use \App\Visitor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /** @test **/
    public function guest_can_see_signup_page()
    {
        $response = $this->get('/signup');

        $response
            ->assertStatus(200)
            ->assertViewIs('register');
    }

    /** @test **/
    public function guest_can_register()
    {
        $this->expectsEvents(VisitorRegistered::class);

        $testVisitor = factory(Visitor::class)->create();

        $response = $this->json('POST', '/signup', [
            'name' => $testVisitor->name,
            'email' => $testVisitor->email,
            'comments' => $testVisitor->comments,
            'num_of_passes' => $testVisitor->num_of_passes,
        ]);

        $response
            ->assertStatus(201)
            ->assertSee($testVisitor->name)
            ->assertViewIs('confirm');
    }
}
