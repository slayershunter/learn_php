<?php
// Ваше задание — создать массив, наполнить его случайными значениями (можно использовать функцию rand), 
// найти максимальное и минимальное значение массива и поменять их местами.  

$arrlen = readline("Введите длинну масива: ");
$arr = array();

if (is_numeric($arrlen) == false) exit("Введено некоректное значение. Программа завершена.\n");

for ($i = 0; $i < $arrlen; $i++) {
    $arr[$i] = rand(0, 999);
}

$max = $arr[0];
$imax = 0;
$min = $arr[0];
$imin = 0;

print_r($arr);

for ($i = 0; $i < $arrlen; $i++) {
    
    if ($arr[$i] > $max) {
        $max = $arr[$i];
        $imax = $i;
    }
    #print "$max [$imax]\n";
}

for ($i = 0; $i < $arrlen; $i++) {
    
    if ($arr[$i] < $min) {
        $min = $arr[$i];
        $imin = $i;
    }
    #print "$min [$imin]\n";
}

$arr[$imax] = $min;
$arr[$imin] = $max;

print_r($arr);

?>