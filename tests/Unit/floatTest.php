<?php

use function Withinboredom\NullCast\floatval;

it('casts to float', function ($original, $expected) {
    expect(floatval($original))->toBe($expected);
})->with([
    'string' => ['string', 0.0],
    '1' => [1, 1.0],
    'null' => [null, null],
    'false' => [false, 0.0],
    'true'  => [true, 1.0],
    '1.023' => [1.023, 1.023],
]);
