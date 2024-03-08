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
echo "<br>", "<b>"."Task 11"."</b>";
$num_languages = 4;
$month = 11;
$days = $month * 16;
$days_per_language = $days / $num_languages;
echo "<br>", "Среднее количество дней потраченных на изучение языков: ", $days_per_language, ".";


// Task 12
echo "<br>", "<b>"."Task 12"."</b>";
echo "<br>", 8**2;


// Task 13
echo "<br>", "<b>"."Task 13"."</b>";
$my_num = 13;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "<br>", $answer;

// Task 14
echo "<br>", "<b>"."Task 14"."</b>";
$a=10;
$b=3;
echo "<br>", "Остаток от деления $a на $b: ", $a % $b;

if ($a % $b == 0):
    echo "<br>", "Делится", $a / $b;
else:
    echo "<br>", "Делится с остатком: ", $a % $b;
endif;

$st = pow(2, 10);
echo "<br>", "2 возведённая в степень 10: ", $st;

echo "<br>", "Квадратный корень из 245: ", sqrt(245);

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $value):
    $sum = pow($value, 2);
endforeach;
$sum = sqrt($sum);
echo "<br>", "Корень из суммы квадратов элементов массива: ", $sum;

echo "<br>", "Квадратный корень из 379: ", round(sqrt(379));
$associative_arr = ["floor" => floor(sqrt(587)), "ceiling" => ceil(sqrt(587))];
echo "<br>", "Квадратный корень из 587 округлённый в меньшую сторону: ", $associative_arr["floor"],
"<br>", "Квадратный корень из 587 округлённый в большую сторону: ", $associative_arr["ceiling"];

echo "<br>", "Минимальное число: ", min(4, -2, 5, 19, -130, 0, 10),
"<br>", "Максимальное число: ", max(4, -2, 5, 19, -130, 0, 10);

echo "<br>", "Случайное число от 1 до 100: ", rand(1, 100);
$rand_arr = [];
for ($i=0; $i <= 9; $i++):
    $rand_arr[$i] = rand(1, 100);
endfor;
echo "<br>", "Массив из 10 случайных чисел: ", implode(", ", $rand_arr);

echo "<br>", "Модуль разности $a и $b: ", abs($a - $b);
$a=-50;
$b=13;
echo "<br>", "Модуль разности $a и $b: ", abs($a - $b);

$v_arr = [1, 2, -1, -2, 3, -3];
$abs_arr = [];
foreach ($v_arr as $value):
    $abs_arr[] = abs($value);
endforeach;
echo "<br>", "Массив без отрицательных чисел: ", implode(", ", $abs_arr);

$given_number = rand(1, 100);
$given_number_dividers_arr = [];
for ($i=1; $i <= $given_number; $i++):
    if ($given_number % $i == 0):
        $given_number_dividers_arr[] = $i;
    endif;
endfor;
echo "<br>", "Делители числа $given_number: ", implode(", ", $given_number_dividers_arr);

$given_arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$given_arr_sum = 0;
$given_arr_num = 0;
for ($i=0; $i <= sizeof($given_arr) && $given_arr_sum <= 10; $i++):
    $given_arr_sum += $given_arr[$i];
    $given_arr_num ++;
endfor;
echo "<br>", "Необходимо сложить $given_arr_num первых элементов чтобы получилась сумма больше 10.";


// Task 15
echo "<br>", "<b>"."Task 15"."</b>";
function printStringReturnNumber($str)
{
    echo "<br>", $str;
    $num = 15;
    return $num;
}
$my_num = printStringReturnNumber("Artem");
echo "<br>", $my_num;

