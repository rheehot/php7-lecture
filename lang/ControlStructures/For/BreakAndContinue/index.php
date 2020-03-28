<?php

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        break 2;
    }
    // Not printed
    echo $i;
}

$sum = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        continue 2;
    }
    $sum += $i;
}
// -> 0
echo $sum;
