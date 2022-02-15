<?php

function recursionNumber($number, $i) {

    if($i <= $number) {
        if ($number % $i === 0) {
            echo $i;
        }

        recursionNumber($number, $i + 1);
    }
}

recursionNumber(16, 1);