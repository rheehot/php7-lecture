<?php

$context = 1;

// -> Hello, world
switch ($context) {
    case 1:
        echo 'Hello, world';
        break;
    case 2:
        echo 'Who are you?';
        break;
    default:
        echo 'Bye';
}

if ($context == 1) {
    echo 'Hello, world';
} elseif ($context == 2) {
    echo 'Who are you?';
} else {
    echo 'Bye';
}
