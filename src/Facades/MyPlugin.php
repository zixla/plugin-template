<?php

namespace :uc:vendor\:uc:plugin\Facades;

use Illuminate\Support\Facades\Facade;

class :uc:plugin extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ':lc:plugin';
    }
}
