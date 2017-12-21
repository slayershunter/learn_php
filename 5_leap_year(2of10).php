<?php

$year = readline("Введите год: ");

if (is_numeric($year) == false) exit("Введено некорректное значение, программа завершена");

if (fmod($year, 4) == 0) echo "$year високосный год";
else echo "$year не високосный год"

?>