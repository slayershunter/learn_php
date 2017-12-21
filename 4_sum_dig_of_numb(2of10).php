<?php

$str = readline("Введите число: ");
$sum = 0;

if (is_numeric($str) == false) {
    echo "Это не число!";
}
else {
    $arr = str_split($str, 1);

    foreach ($arr as &$val) {
        $sum += $val;
    }

    echo "Сумма введённых чисел $sum";
}


?>