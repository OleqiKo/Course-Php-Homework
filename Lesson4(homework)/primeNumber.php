<?php

function primeNumber2($number) {

    if ($number === 1) {
        return $number;
    } else if ($number === 2) {
        return "{$number} - это простое число";
    }

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return "$number} - это составное число";
        } else {
            return "$number} - это простое число";
        }
    }
}

echo primeNumber2(2);