<?php

namespace Withinboredom\NullCast;

function intval(mixed $value): int|null
{
    return null === $value ? null : (int)$value;
}

function floatval(mixed $value): float|null
{
    return null === $value ? null : (float)$value;
}

function stringval(mixed $value): string|null
{
    return null === $value ? null : (string)$value;
}

function boolval(mixed $value): bool|null
{
    return null === $value ? null : (bool)$value;
}
