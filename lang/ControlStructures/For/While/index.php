<?php

$i = 0;
while ($i < 10) {
    // -> 0 ~ 9
    echo $i++;
}

$i = 0;
do {
    // -> 0 ~ 9
    echo $i++;
} while ($i < 10);
