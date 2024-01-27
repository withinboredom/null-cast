<?php

use function Withinboredom\NullCast\stringval;

it('casts to string', function ($original, $expected) {
    expect(stringval($original))->toBe($expected);
})->with([
    'string' => ['string', 'string'],
    '1' => [1, '1'],
    'null' => [null, null],
    'false' => [false, ''],
    'true'  => [true, '1'],
    '1.023' => [1.023, '1.023'],
]);
