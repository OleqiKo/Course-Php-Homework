<?php

// Не нашёл решения :c. В будущем возможно постараюсь найти

function coincidence($firstString, $secondString) {

    similar_text($firstString, $secondString, $perc);

    return "Сходство на {$perc}%";
}

echo coincidence('asdasd', 'asdddds');