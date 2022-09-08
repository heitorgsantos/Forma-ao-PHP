<?php

for ($index = 1; $index <= 100; $index++) {
    if ($index % 2 == 0) {
        continue;
    }
    echo $index . PHP_EOL;
}
