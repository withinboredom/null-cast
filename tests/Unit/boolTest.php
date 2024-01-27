<?php

use function Withinboredom\NullCast\boolval;

it('casts to bool', function ($original, $expected) {
    expect(boolval($original))->toBe($expected);
})->with([
    'string' => ['string', true],
    '1' => [1, true],
    'null' => [null, null],
    'false' => [false, false],
    'true'  => [true, true],
    '1.023' => [1.023, true],
]);
