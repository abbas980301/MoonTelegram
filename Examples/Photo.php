<?php
require_once '../vendor/autoload.php';

$token = 'TOKEN';
$t = new Telegram($token);
$message = new \Shakibonline\Message($t->getData());

echo $message->Caption()            . PHP_EOL;
echo $message->Photo()->Width()     . PHP_EOL;
echo $message->Photo()->FileID()    . PHP_EOL;
echo $message->Photo()->Height()    . PHP_EOL;
echo $message->Photo()->FileSize()  . PHP_EOL;
