<?php

namespace Anay\OddEvenChecker\Facades;

use Anay\OddEvenChecker\OddEvenChecker;
use Illuminate\Support\Facades\Facade;

class OddEven extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return OddEvenChecker::class;   // resolve the real class, no string alias needed
    }
}
