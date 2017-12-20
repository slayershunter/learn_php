<?php

$n = readline("Введите число n: ");
$sum = 0;
$sqr = 0;

for ($i = 1; $i <= $n; $i++) {
    $sqr = $i ** $i;
    echo "Квадрат числа $i = $sqr \n";
    $sum += $sqr;   
}

echo "Сумма квадратов = $sum";

?>