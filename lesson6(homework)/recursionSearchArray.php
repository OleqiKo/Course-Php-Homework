<?php

function recursionSearchArray($array, $searchValue) {
    
    if(count($array) === 0) {
        return;
    }

    foreach($array as $key => $value) {
        if (is_array($value)) {

            return recursionSearchArray($value, $searchValue);

        } else if ($value === $searchValue) {
            return "Вы нашли значение под индексом {$key}";
        }
    }
}

echo recursionSearchArray([1,2,3, [2,4,'hello!']], 'hello!');