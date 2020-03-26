<?php

// [], '', false, 0, null -> false
if (true) {
    echo 'Hello, world';
}

// -> Bye
if (false) {
    echo 'Hello, world';
} else {
    echo 'Bye';
}

// -> Who are you?
if (false) {
    echo 'Hello, world';
} elseif (true) {
    echo 'Who are you?';
} else {
    echo 'Bye';
}

// -> Hello, world
if ($message = 'Hello, world') {
    echo $message;
}
