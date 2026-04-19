<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthorFeatureTest extends TestCase
{
    use RefreshDatabase;
    public function test_can_create_author_via_post_request()
{
    $response = $this->post('/authors', [
        'name' => 'Gwi-nam',
        'surname' => 'Lee',
        'birthdate' => '1990-01-01'
    ]);

   
    $response->assertStatus(302);
    $response->assertRedirect('/authors');

    
    $this->assertDatabaseHas('authors', [
        'name' => 'Gwi-nam',
        'surname' => 'Lee'
    ]);
}
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
