<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    public function testEmail()
    {
        $result = validate_email('chmalo.f@gmail.com');
        $this->assertTrue($result);

        $result = validate_email('chmalo.f@@gmail.com');
        $this->assertFalse($result);
    }
}
