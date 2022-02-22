<?php

$filmsInfo = array(
"films" => ["Звёздные войны. Эпизод IV: Новая надежда", "Звёздные войны. Эпизод V: Империя наносит ответный удар"],
"places" => ["1", "2", "3"],
"rating" => ["10","100","1","8","2","155"]
);

$ratingArray = $filmsInfo['rating'];

function sortRating($array) {
    sort($array);
    
    return $array;
}

print_r(sortRating($ratingArray));