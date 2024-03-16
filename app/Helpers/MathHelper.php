<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Log;

class MathHelper
{
    static function add(int $a, int $b): int
    {
        return once(function () use ($a, $b){
            Log::info("Adding $a and $b");
            return $a + $b;
        });
    }
}
