<?php

function dividersNumbers($number) {
    $arrayDividers = [];

    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i === 0) {
            $arrayDividers[$i] = $i;
        }
    }

    return $arrayDividers;
}

print_r(dividersNumbers(16));
