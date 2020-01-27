<?php

namespace Tests\Feature;

use \App\Speaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test **/
    public function guest_can_visit_index_page()
    {
        $response = $this->get('/');

        $response
            ->assertStatus(200)
            ->assertViewIs('index');
    }

    /** @test **/
    public function guest_can_visit_speakers_page()
    {
        $speaker = Speaker::find(1);

        $response = $this->get('/speakers');

        $response
            ->assertStatus(200)
            ->assertViewIs('speakers')
            ->assertSee($speaker->name);
    }

    /** @test **/

    public function guest_can_visit_venue_page()
    {
        $response = $this->get('/venue');

        $response
            ->assertStatus(200)
            ->assertViewIs('venue');
    }

    /** @test **/
    public function guest_can_visit_schedule_page()
    {
        $response = $this->get('/schedule');

        $response
            ->assertStatus(200)
            ->assertViewIs('schedule');
    }

    /** @test **/
    public function guest_can_see_login_page()
    {
        $response = $this->get('/login');

        $response
            ->assertStatus(200)
            ->assertViewIs('auth.login');
    }
}
