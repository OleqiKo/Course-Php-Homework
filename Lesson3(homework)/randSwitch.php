<?php
$randValue = rand(0, 50);

switch ($randValue) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5: {
        echo "odd";
        break;
    }
    case 10:
    case 20:
    case 30:
    case 40:
    case 50: {
        echo "even";
        break;
    }
    default: {
        echo "Oops";
    }
}