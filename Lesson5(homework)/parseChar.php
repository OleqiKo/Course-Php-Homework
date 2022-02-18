<?php

function toUpperCaseChar($string, $char) {
    return str_replace($char, strtoupper($char), $string);
}

echo toUpperCaseChar('Hallo, warld!', 'a');