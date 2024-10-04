<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class LoggingTest extends TestCase
{
    public function testLogging()
    {
        Log::info('hello info');
        Log::warning('hello warning');
        Log::error('hello error');
        Log::critical('hello critical');

        $this->assertTrue(true);
    }
}
