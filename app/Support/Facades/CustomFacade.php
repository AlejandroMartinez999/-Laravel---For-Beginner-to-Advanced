<?php

namespace App\Support\Facades;

use Illuminate\Support\Facades\Facade;

class CustomFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'customfacade';
    }
}
