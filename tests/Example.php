<?php

require_once '../vendor/autoload.php';


$token = '247070557:AAEYyN1uFHTPgwoynm28_4lhNecCqk1efMk';
$t = new Telegram($token);

$type = \Shakibonline\MoonTelegram::Type($t->getData());
$message = new \Shakibonline\Message($t->getData());

echo PHP_EOL;
echo $type;
echo PHP_EOL;
echo $message->Text();
echo PHP_EOL;
echo $message->Chat()->ID();
echo PHP_EOL;
echo $message->Chat()->Type();
echo PHP_EOL;
