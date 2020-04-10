<?php

namespace :uc:vendor\:uc:plugin\Tests;

use Orchestra\Testbench\TestCase as Testbench;

abstract class TestbenchTestCase extends Testbench
{
    /**
     * Setup before each test.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * Tear down after each test.
     * @return  void
     */
    public function tearDown()
    {
       parent::tearDown();
    }

    /**
     * Tell Testbench to use this plugin.
     * @param $app
     * @return array
     */
    protected function getPluginProviders($app)
    {
        return [':uc:vendor\:uc:plugin\:uc:pluginServiceProvider'];
    }
}
