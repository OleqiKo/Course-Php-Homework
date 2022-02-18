<?php

function pyramid($symbol = '#', $number = 5) {
    $stringPyramid = "";

    for($i = 0; $i <= $number; $i++) {
        $stringPyramid .= str_repeat($symbol, $i) . "\n";
    }

    return $stringPyramid;
}

echo pyramid('#', '10');