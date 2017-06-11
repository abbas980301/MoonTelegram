# MoonTelegram

[![Total Downloads](https://poser.pugx.org/shakibonline/moon-telegram/downloads)](https://packagist.org/packages/shakibonline/moon-telegram)
[![License](https://poser.pugx.org/shakibonline/moon-telegram/license)](https://packagist.org/packages/shakibonline/moon-telegram)
[![StyleCI](https://styleci.io/repos/93853503/shield?branch=master)](https://styleci.io/repos/93853503)

> It's a way to use the telegram's response as Object instead of Array

Installation
---------
From your project directory, run
```
composer require shakibonline/moon-telegram
```

Examples
---------
```php
require_once '../vendor/autoload.php';

$message = new \Shakibonline\Message($update);

echo $message->Text() . PHP_EOL;
echo $message->Chat()->ID() . PHP_EOL;
echo $message->Chat()->Type() . PHP_EOL;
```

See [`Examples`](https://github.com/shakibonline/MoonTelegram/tree/master/Examples) folder

Contact me
------------
You can contact me [via Telegram](https://telegram.me/abbasShakiba) but if you have an issue please [open](https://github.com/shakibonline/MoonTelegram/issues) one.

# Pull Request
------------
Your welcome to any pull requests.
