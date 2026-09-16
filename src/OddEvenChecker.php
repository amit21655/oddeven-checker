<?php

namespace Anay\OddEvenChecker;

class OddEvenChecker
{
    public function check(int ...$numbers): string
    {
        $result = array_sum($numbers) % 2 === 0 ? 'even' : 'odd';
        echo $result;
        return $result;
    }
}
