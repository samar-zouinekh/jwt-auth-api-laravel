<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testExample(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // public function testRegisterUser()
    // {
    //     $response = $this->postJson('/api/register', [
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    //     'password' => 'password',
    // ]);

    //     $response->assertStatus(200)
    //          ->assertJson(['message' => 'User registered']);
    // }
}
