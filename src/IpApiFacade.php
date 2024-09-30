<?php

namespace Barstec\IpApi;

use Illuminate\Support\Facades\Facade;

final class IpApiFacade extends Facade
{
    /**
     * Return Laravel Framework facade accessor name.
     * 
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ipapi';
    }
}