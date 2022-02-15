<?php

function numbers($first, $second, $third) {
    if ($first > $second && $first > $third) {
        return "Первая переменная, самая большая - {$first}";;
    } else if ($second > $first && $second > $third) {
        return "Вторая переменная, самая большая - {$second}";
    } else if ($third > $first && $third > $second) {
        return "Третья переменная, самая большая - {$third}";
    } else if ($first === $second && $second === $third) {
        return "Все числа между собой равны - {$first}";
    }
}

echo numbers(22, 24, 22);