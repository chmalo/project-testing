<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageTest extends TestCase
{
    public function testHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAbout()
    {
        $response = $this->get('about');

        $response->assertStatus(200);
    }
}
