<?php
// Работа светофора запрограммирована таким образом: с начала каждого часа, в течении трех минут горит зеленый сигнал, 
// следующие две минуты горит красный, дальше в течении трех минут - зеленый и т. д. Вам нужно разработать программу, 
// которая по введенному числу определяла какого цвета сейчас горит сигнал.

$minutes = readline("Введите число минут: ");

if (is_numeric($minutes) == false or $minutes < 0 or $minutes > 59) exit("Введено некорректное значение, программа завершена.");

if (($minutes % 5) < 2) print "Горит зеленый сигнал светофора.\n";
else print "Горит красный сигнал светофора\n";

?>