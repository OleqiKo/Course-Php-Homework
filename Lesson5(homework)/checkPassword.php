<?php

function checkPassword($password) {
    $strLength = strlen($password);
    $checkUppercaseChar = preg_match('/[A-Z]+/', $password);
    $checkNumbers = preg_match('~[0-9]+~', $password);
    $checkSpecialCharacters = preg_match('/[^a-zA-Z]+/', $password);

    if ($strLength < 6) {
        return "Недействительный пароль";
    } else if ($strLength >= 10 && $checkUppercaseChar && $checkNumbers && $checkSpecialCharacters) {
        return "Сложный пароль";
    }
    else if ($strLength >= 8 && $checkUppercaseChar && $checkNumbers || $checkNumbers && $checkSpecialCharacters || $checkSpecialCharacters && $checkUppercaseChar) {
        return "Нормальный пароль";
    }
    else if ($strLength >= 6 && !$checkUppercaseChar && !$checkSpecialCharacters) {
        return "Слабый пароль";
    }
}

echo checkPassword('asasasdSs^Sss#dsdasd222');