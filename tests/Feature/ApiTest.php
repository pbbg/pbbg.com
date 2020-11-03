<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApiRootResponse()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
