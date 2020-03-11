<?php


$message = 'Hello, world'; // String
$userCount = 0; // Int
$pi = 3.14; // Double
$is_visited = false; // Boolean
$temp = null; // NULL

$message;

// -> The message is $message
'The message is $message';
// -> THe message is Hello, world
"The message is $message";

<<<HTML
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>HTML Template</title>
    </head>
    <body>
        <h1>$message</h1>
    </body>
</html>
HTML;

$varName = 'message';

// $message = 'Hello, world';
$$foo = 'Hello, world'; // Hello, world

unset($message);

if (true) {
    $variableScope = 'Hello, world';
}

// -> Hello, world
echo $variableScope;


$message = 'Hello, world';

function foo()
{
    // global $message;
    $GLOBALS['message'] = 'Who are you?';

    // $message = 'Who are you?';
    // echo $message;
}


function foo2()
{
    static $count = 0;
}

// $count = 0
foo2();
// $count = 1
foo2();

function foo3($arg)
{
    return function () use ($arg) {
        return $arg;
    };
}

$func = foo3('Hello, world');

// -> Hello, world
echo $func();
