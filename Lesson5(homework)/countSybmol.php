<?php

function countSymbol($string, $symbol) {
    $stringSymbol = "";

    for ($i = 0; $i < strlen($string); $i++) {
        $stringSymbol .= $symbol;
    }

    return $stringSymbol;
}

echo countSymbol('Hello, world!', 'o');