<?php

$value = readline("Введите достоинство карты: ");

if ($value == 1) $card = "Единица";
if ($value == 2) $card = "Двойка";
if ($value == 3) $card = "Тройка";
if ($value == 4) $card = "Четвёрка";
if ($value == 5) $card = "Пятёрка";
if ($value == 6) $card = "Шестёрка";
if ($value == 7) $card = "Семёрка";
if ($value == 8) $card = "Восьмерка";
if ($value == 9) $card = "Девятка";
if ($value == 10) $card = "Десятка";
if ($value == 11) $card = "Валет";
if ($value == 12) $card = "Дама";
if ($value == 13) $card = "Король";
if ($value == 14) $card = "Туз";

echo "Достоинство карты - $card";