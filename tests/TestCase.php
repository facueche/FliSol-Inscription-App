<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\DB;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseMigrations;

    protected function setUp()
    {
        parent::setUp();

        if (getenv('DB_CONNECTION') === 'sqlite') {
            DB::select('PRAGMA strict=ON;');
        }

        $this->beforeApplicationDestroyed(function () {
            DB::disconnect();
        });
    }
}
