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

    public function testContext()
    {
        Log::info('hello info', ['user' => 'hans']);
        Log::info('hello info', ['user' => 'hans']);
        Log::info('hello info', ['user' => 'hans']);

        $this->assertTrue(true);
    }

    public function testWithContext()
    {
        Log::withContext(['user' => 'hans']);

        Log::info('hello info');
        Log::info('hello info');
        Log::info('hello info');

        $this->assertTrue(true);
    }

    public function testChannel()
    {
        $stderrLogger = Log::channel('stderr');
        $stderrLogger->error('hello stderr');

        $this->assertTrue(true);
    }
}
