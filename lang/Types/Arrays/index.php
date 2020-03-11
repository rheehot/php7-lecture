<?php


$messages = [
    'Hello, world',
    'Who are you?',
    'Bye'
];
// $messages = array('Hello, world', 'Who are you?', 'Bye');

$messages = [
    0           => 'Hello, world',
    'message'   => 'Who are you?',
    'Bye',
];

// [, $message ] = [ 'Hello, world', 'Who are you?' ];
list(, $message) = ['Hello, world', 'Who are you?'];
// ['message' => $message ] = [ ... ]
list('message' => $message) = [
    'message' => 'Hello, world',
];

function foo($messages)
{
    var_dump($messages);
}

foo(...['Hello, world', 'Who are you?']);

$messages = [
    'Hello, world'
];

// $messages = [ 'Hello, world', 'Who are you?', 'Bye' ];
$messages = [
    ...$messages,
    'Who are you?',
    'Bye'
];

// array_push($messages, 'whoops');
$messages[] = 'whoops';

$messages[3];
$messages[3] = 'Do you know?';

// array_pop($messages);
unset($messages[3]);
