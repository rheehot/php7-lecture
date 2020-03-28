<?php

$messages = [
    'Hello, world',
    'Who are you?',
    'Bye'
];

for ($i = 0; $i < count($messages); $i++) {
    echo $messages[$i] . PHP_EOL;
}

foreach ($messages as $key => $value) {
    echo $messages[$key] . PHP_EOL;
}
