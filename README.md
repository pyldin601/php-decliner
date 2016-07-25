# Decliner
Simple function made to decline numerals.

### Simple syntax:
```php
use RG\Libs\Decliner\decline;

$result = decline(11, ['попугай', 'попугая', 'попугаев']);

assert($result == '11 попугаев');
```

### Make syntax
```php
use RG\Libs\Decliner\make;

$decline = make(['попугай', 'попугая', 'попугаев']);

assert($decline(1) == '1 попугай');
assert($decline(22) == '22 попугая');
assert($decline(38) == '38 попугаев');
```

