<?php

test('once function', function () {
    $result1 = \App\Helpers\MathHelper::add(10, 10);
    $result2 = \App\Helpers\MathHelper::add(10, 10);
    $result3 = \App\Helpers\MathHelper::add(10, 11);

    expect($result1)->toBe(20);
    expect($result2)->toBe(20);
    expect($result3)->toBe(21);
});
