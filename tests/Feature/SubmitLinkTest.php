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

    /** @test */
    public function link_is_not_created_if_validation_fails()
    {
        $response = $this->post(route('links.store'));

        $response->assertSessionHasErrors([
            'title', 'url', 'description'
        ]);
    }

    /** @test */
    public function link_is_not_created_with_an_invalid_url()
    {
        $this->withoutExceptionHandling();

        $invalids = ['//invalid-url.com', 'invalid-url', 'invalid.com'];

        foreach ($invalids as $invalid) {
            try {
                $response = $this->post(route('links.store'), [
                    'title' => 'Example title',
                    'url' => $invalid,
                    'description' => 'Exaple description'
                ]);
            } catch (\Throwable $e) {
                $this->assertEquals(
                    'The url format is invalid.',
                    $e->validator->errors()->first('url')
                );
                continue;
            }

            $this->fail("The URL $invalid passed validation when it should have failed.");
        }
    }
}
