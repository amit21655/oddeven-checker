<?php

namespace Anay\OddEvenChecker\Facades;

use Illuminate\Support\Facades\Facade;

class OddEven extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'oddeven'; // matches the alias bound in register()
    }
}
