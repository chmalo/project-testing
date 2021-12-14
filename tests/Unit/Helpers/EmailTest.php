<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use Tests\TestCase;

class EmailTest extends TestCase
{
    public function testEmail()
    {
        $result = Email::validate('chmalo.f@gmail.com');
        $this->assertTrue($result);

        $result = Email::validate('chmalo.f@@gmail.com');
        $this->assertFalse($result);
    }
}
