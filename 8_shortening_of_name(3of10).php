<?php
// Вашим заданием будет создание сокращенного варианта ФИО.
// Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.

function mb_str_split($string) { 
    return preg_split('#(?<!^)(?!$)#u', $string); 
}  

$fullname = readline("Введите ФИО целиком: ");
$splitname = explode(" ", $fullname);
$firstname = mb_str_split($splitname[1]);
$patronymic = mb_str_split($splitname[2]);

print "Сокращенное ФИО: $splitname[0] $firstname[0]. $patronymic[0].\n";

?>