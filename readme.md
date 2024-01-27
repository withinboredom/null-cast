# Null Cast

When using strict types, `null` is often erased when casting, introducing subtle bugs.
This library allows you to replace your casts with these simple functions that retain `null`,
but otherwise perform the desired cast.

## Installation

```
composer require withinboredom/null-cast
```

## Usage

```php
use function Withinboredom\NullCast\boolval;
use function Withinboredom\NullCast\floatval;
use function Withinboredom\NullCast\intval;
use function Withinboredom\NullCast\stringval;

boolval('true') === true;
boolval(null) === null;

floatval('12.34') === 12.34;
floatval(null) === null;

intval(true) === 1;
intval(null) === null;

stringval(123) === '123';
stringval(null) === null;
```
