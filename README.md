# hashtag-or-arroba-remover
Hashtag or arroba remover

## Install

```sh
composer require phabloraylan/hashtag-or-arroba-remover
```

## Testing

```sh
composer test
```

## Using

```php
require_once __DIR__ . '/vendor/autoload.php';
```

## General use

```php
use \HashtagOrArrobaRemover\HashtagOrArrobaRemover;

$str = "@test";

echo HashtagOrArrobaRemover::toRemoveSymbol($str);


$hashtagOrArrobaRemover = new HashtagOrArrobaRemover;

echo $hashtagOrArrobaRemover->toRemoveHashTag($str);
echo $hashtagOrArrobaRemover->toRemoveArroba($str);

```