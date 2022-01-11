<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubmitLinkTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function guest_can_submit_a_new_link()
    {
        $response = $this->post(route('links.store'), [
            'title' => 'Example title',
            'url' => 'http://example.com',
            'description' => 'Exaple description'
        ]);

        $this->assertDatabaseHas('links', [
            'title' => 'Example title',
            'url' => 'http://example.com',
            'description' => 'Exaple description'
        ]);

        $response->assertStatus(302)
            ->assertHeader('Location', url(route('links.index')));

        $this->get(route('links.index'))
            ->assertSee('Example title');
    }
}
