<?php

$multiArray = [
    "1",
    [2,3,4,5,6,7],
    1,
    [
        [100,55],
        [1,2]
    ],
    15
];

$newArray = [];

function multiArrayCount($array) {
    global $newArray;

    foreach ($array as $value) {
        if(is_array($value)) {
            multiArrayCount($value);
        } else {
            $newArray[] = $value;
        }
    }
}

multiArrayCount($multiArray);
print_r($newArray);