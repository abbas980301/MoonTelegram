<?php

require_once '../vendor/autoload.php';


$token = 'TOKEN';
$t = new Telegram($token);
$message = new \Shakibonline\Message($t->getData());

echo 'Message Text: '. $message->ReplyToMessage()->Text() . PHP_EOL;
echo 'Message Caption: '. $message->ReplyToMessage()->Caption() . PHP_EOL;
echo 'Message Caption: '. $message->ReplyToMessage()->ForwardFromChat()->ID() . PHP_EOL;
echo 'Message Caption: '. $message->ReplyToMessage()->ForwardFromChat()->UserName() . PHP_EOL;
echo 'Message Caption: '. $message->ReplyToMessage()->ForwardFromChat()->Title() . PHP_EOL;

