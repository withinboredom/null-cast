<?php

use function Withinboredom\NullCast\intval;

it('casts to int', function ($original, $expected) {
    expect(intval($original))->toBe($expected);
})->with([
    'string' => ['string', 0],
    '1' => [1, 1],
    'null' => [null, null],
    'false' => [false, 0],
    'true'  => [true, 1],
    '1.023' => [1.023, 1],
]);
