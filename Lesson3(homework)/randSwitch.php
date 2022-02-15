<?php
$a = true;
$b = true;

if ($a === true && $b !== true || $a === false && $b !== false) {
    echo "true";
} else {
    echo "false";
}