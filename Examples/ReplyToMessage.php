<?php

require_once '../vendor/autoload.php';

$token = 'Token';
$t = new Telegram($token);
$message = new \Shakibonline\Message($t->getData());

echo 'Reply To Message Caption: '.$message->ReplyToMessage()->Caption().PHP_EOL;
echo 'Reply To Message Forward From Chat ID: '.$message->ReplyToMessage()->ForwardFromChat()->ID().PHP_EOL;
echo 'Reply To Message Forward From Chat Title: '.$message->ReplyToMessage()->ForwardFromChat()->Title().PHP_EOL;
echo 'Reply To Message Forward From Chat Username: '.$message->ReplyToMessage()->ForwardFromChat()->UserName().PHP_EOL;
