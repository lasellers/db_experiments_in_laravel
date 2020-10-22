<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Routing\Middleware\ThrottleRequests;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        // disable "429 Too Many Attempts" error because of throttle middleware
        $this->withoutMiddleware(
            ThrottleRequests::class
        );
    }
}
