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
require_once 'vendor/autoload.php';

/**
 * @var array $update
 */
$message = new \Shakibonline\Message($update);

echo $message->Text() . PHP_EOL;
echo $message->Chat()->ID() . PHP_EOL;
echo $message->Chat()->Type() . PHP_EOL;
```

Check The type
```php
/**
 * @var array $update
 */
$type = MoonTelegram::Type($update);

if ( $type === MoonTelegram::MESSAGE ) {
	$message = new Message($update);
	$chat = $message->Chat();
} elseif ( $type === MoonTelegram::CALLBACK_QUERY ) {
	$callback = new CallbackQuery($update);
	$chat = $callback->Message()->Chat();
}
```

See [`Examples`](https://github.com/shakibonline/MoonTelegram/tree/master/Examples) folder

Contact me
------------
You can contact me [via Telegram](https://telegram.me/abbasShakiba) (EN and FA) but if you have an issue please [open](https://github.com/shakibonline/MoonTelegram/issues) one.

# Pull Request
------------
Your welcome to any pull requests.
