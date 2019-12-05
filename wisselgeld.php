<?php

$data = intval($argv[1]);

$array = array(50, 20, 10, 5, 2, 1);

foreach($array as $value) {

    $geld = floor($data / $value);
    if ($geld >= 1) {
        $data = $data - ($value * $geld);
        echo $geld . " x " . $value . " euro " . PHP_EOL;
    }
} 