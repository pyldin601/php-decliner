# php-decliner
[![Build Status](https://travis-ci.org/pldin601/php-decliner.svg?branch=master)](https://travis-ci.org/rg-libs/Decliner)
[![Code Climate](https://codeclimate.com/github/pldin601/php-decliner/badges/gpa.svg)](https://codeclimate.com/github/rg-libs/Decliner)
[![Test Coverage](https://codeclimate.com/github/pldin601/php-decliner/badges/coverage.svg)](https://codeclimate.com/github/rg-libs/Decliner/coverage)
[![Issue Count](https://codeclimate.com/github/pldin601/php-decliner/badges/issue_count.svg)](https://codeclimate.com/github/rg-libs/Decliner)

Simple function made to decline numerals.

#### Simple syntax:
```php
use RG\Libs\Decliner\decline;

$result = decline(11, ['попугай', 'попугая', 'попугаев']);

assert($result == '11 попугаев');
```

#### Make syntax:
```php
use RG\Libs\Decliner\make;

$decline = make(['попугай', 'попугая', 'попугаев']);

assert($decline(1) == '1 попугай');
assert($decline(22) == '22 попугая');
assert($decline(38) == '38 попугаев');
```

