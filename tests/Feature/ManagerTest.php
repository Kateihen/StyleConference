<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\Manager;
use \App\Visitor;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ManagerTest extends TestCase
{
    /** @test **/
    public function guest_cannot_see_admin_page()
    {
        $response = $this->get('/admin');

        $response
            ->assertStatus(302)
            ->assertRedirect('login');
    }

    /** @test **/
    public function manager_can_see_list_of_registered_visitors()
    {
        $manager = Manager::find(1);

        $visitor = Visitor::find(1);

        $response = $this->actingAs($manager)
                        ->get('/admin');

        $response
            ->assertStatus(200)
            ->assertViewIs('admin')
            ->assertSee($manager->name)
            ->assertSee($visitor->name);
    }

    /** @test **/
    public function manager_can_register_other_managers()
    {
        $manager = Manager::find(1);

        $response = $this->actingAs($manager)
                        ->get('/register');

        $response
            ->assertStatus(200)
            ->assertViewIs('auth.register');
    }

    /** @test **/
    public function guest_cannot_register()
    {
        $response = $this->get('/register');

        $response
            ->assertStatus(302)
            ->assertRedirect('login');
    }

    /** @test **/
    public function manager_can_see_list_of_managers()
    {
        $manager = Manager::find(1);

        $response = $this->actingAs($manager)
                        ->get('/list');

        $response
            ->assertStatus(200)
            ->assertViewIs('managers')
            ->assertSee($manager->mail);
    }
}
