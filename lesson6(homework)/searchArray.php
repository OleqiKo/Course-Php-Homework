<?php

function searchArray($array, $searchValue) {

    if(count($array) === 0) {
        return;
    }
    
    foreach ($array as $key => $value) {
        if(is_array($value)) {
            foreach ($value as $multiKey => $multiValue) {
                if ($multiValue === $searchValue) {
                    return "Вы нашли значение в подмассиве с индексом {$key} и индексом {$multiKey}";
                }
            }
        } else if ($value === $searchValue) {
            return "Вы нашли значение под индексом {$key}";
        }
    }
}

echo searchArray([1,2,3, [2,'hello!',4]], 'hello!');