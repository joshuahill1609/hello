<?php

namespace jjh\Hello;

use \Illuminate\Support\Facades\Facade;

class HelloFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return Hello::class;
    }
}
