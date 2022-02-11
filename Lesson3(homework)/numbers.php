<?php
$firstNumber = 10;
$secondNumber = 9;
$thirdNumber = 10;

if($firstNumber > $secondNumber && $firstNumber > $thirdNumber) {
    echo "$firstNumber";
} else if ($secondNumber > $firstNumber && $secondNumber > $thirdNumber) {
    echo "$secondNumber";
} else if ($thirdNumber > $firstNumber && $thirdNumber > $secondNumber) {
    echo "$thirdNumber";
} else if($firstNumber < $secondNumber && $firstNumber < $thirdNumber) {
    echo "$firstNumber";
} else if ($secondNumber < $firstNumber && $secondNumber < $thirdNumber) {
    echo "$secondNumber";
} else if ($thirdNumber < $firstNumber && $thirdNumber < $secondNumber) {
    echo "$thirdNumber";
} else if ($firstNumber === $secondNumber || $firstNumber === $thirdNumber) {
    echo "$firstNumber";
}