<?php

function reverseString($string) {
    $stringPyramid = '';

    for($i = strlen($string); $i >= 0 ; $i--) {
        $stringPyramid .= $string[$i];
    }

    return $stringPyramid;
}

echo reverseString("Hello");