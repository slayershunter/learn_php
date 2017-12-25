<?php
// Составить программу, которая бы по заданному числу выводила его название по китайском календаре. 
// Заданное число не может быть меньше 1924. 

$year = readline("Введите год: ");

if (is_numeric($year) == false or $year < 1924) exit("Введено некорректное значение, программа завершена.");

switch (($year - 1924) % 12) {
    case 0:
        print "Год крысы";
        break;
    case 1:
        print "Год быка";
        break;
    case 2:
        print "Год тигра";
        break;
    case 3:
        print "Год кролика";
        break;
    case 4:
        print "Год дракона";
        break;
    case 5:
        print "Год змеи";
        break;
    case 6:
        print "Год лошади";
        break;
    case 7:
        print "Год овцы";
        break;
    case 8:
        print "Год обезьяны";
        break;
    case 9:
        print "Год петуха";
        break;
    case 10:
        print "Год собаки";
        break;
    case 11:
        print "Год свиньи";
        break;
}

?>