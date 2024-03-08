<?php


// Task 1
echo "<b>"."Task 1"."</b>", "<br>";
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// My code
$order = &$very_bad_unclear_name;
$order .= " and a soda";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";


// Task 2
echo "<br>", "<b>"."Task 2"."</b>";
$number = 15;
$number1 = 14.325;
$number2 = 2.325;
echo "<br>", "$number\n$number2\n", $number1 - $number2;
$last_month = 1187.23;
$this_month = 1089.98;
echo "<br>", "Разница в расходах между прошлым и текущим месяцем: ", $last_month - $this_month, ".";


// Task 11
echo "<br>", "<b>"."Task 10"."</b>";
$num_languages = 4;
$month = 11;
$days = $month * 16;
$days_per_language = $days / $num_languages;
echo "<br>", "Среднее количество дней потраченных на изучение языков: ", $days_per_language, ".";