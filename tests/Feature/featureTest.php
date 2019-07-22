<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class featureTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    /**
     *  Feature Test for register page
     */
    public function testExample()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    /**
     *  Feature Test for login page
     */
    public function testLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    /**
     *  Feature Test for about page
     */
    public function testabout()
    {
        $response = $this->get('/profile');

        $response->assertStatus(200);
    }
    public function testcontact()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

}
