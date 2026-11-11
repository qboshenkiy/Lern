<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactMessageTest extends TestCase
{
    public function test_a_valid_contact_message_redirects_with_a_success_alert(): void
    {
        $response = $this->followingRedirects()->post(route('contact.submit'), [
            'name' => 'Alex',
            'email' => 'alex@example.com',
            'message' => 'Hello there',
        ]);

        $response->assertOk();
        $response->assertSee('Your message has been submitted successfully.');
        $response->assertSee('role="status"', false);
    }

    public function test_an_invalid_contact_message_redirects_with_validation_errors(): void
    {
        $response = $this->from(route('contact'))->followingRedirects()->post(route('contact.submit'), [
            'name' => '',
            'email' => 'not-an-email',
            'message' => '',
        ]);

        $response->assertOk();
        $response->assertSee('Please check the following:');
        $response->assertSee('role="alert"', false);
    }
}
