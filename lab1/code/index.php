<?php


// Task 1
echo "<b>"."Task 1"."</b>", "<br />";
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// My code
$order = &$very_bad_unclear_name;
$order .= " and a soda";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";


// Task 2
echo "<br />", "<b>"."Task 2"."</b>";
$number = 15;
$number1 = 14.325;
$number2 = 2.325;
echo "<br />", "$number\n$number2\n", $number1 - $number2;
$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "<br />", "Разница в расходах между прошлым и текущим месяцем: ", $lastMonth - $thisMonth, ".";


// Task 11
echo "<br />", "<b>"."Task 11"."</b>";
$numLanguages = 4;
$month = 11;
$days = $month * 16;
$daysPerLanguage = $days / $numLanguages;
echo "<br />", "Среднее количество дней потраченных на изучение языков: ", $daysPerLanguage, ".";


// Task 12
echo "<br />", "<b>"."Task 12"."</b>";
echo "<br />", 8**2;


// Task 13
echo "<br />", "<b>"."Task 13"."</b>";
$myNum = 13;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo "<br />", $answer;

// Task 14
echo "<br />", "<b>"."Task 14"."</b>";
$a=10;
$b=3;
echo "<br />", "Остаток от деления $a на $b: ", $a % $b;

if ($a % $b == 0):
    echo "<br />", "Делится", $a / $b;
else:
    echo "<br />", "Делится с остатком: ", $a % $b;
endif;

$st = pow(2, 10);
echo "<br />", "2 возведённая в степень 10: ", $st;

echo "<br />", "Квадратный корень из 245: ", sqrt(245);

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $value):
    $sum = pow($value, 2);
endforeach;
$sum = sqrt($sum);
echo "<br />", "Корень из суммы квадратов элементов массива: ", $sum;

echo "<br />", "Квадратный корень из 379: ", round(sqrt(379));
$associativeArr = ["floor" => floor(sqrt(587)), "ceiling" => ceil(sqrt(587))];
echo "<br />", "Квадратный корень из 587 округлённый в меньшую сторону: ", $associativeArr["floor"],
"<br />", "Квадратный корень из 587 округлённый в большую сторону: ", $associativeArr["ceiling"];

echo "<br />", "Минимальное число: ", min(4, -2, 5, 19, -130, 0, 10),
"<br />", "Максимальное число: ", max(4, -2, 5, 19, -130, 0, 10);

echo "<br />", "Случайное число от 1 до 100: ", rand(1, 100);
$randArr = [];
for ($i=0; $i <= 9; $i++):
    $randArr[$i] = rand(1, 100);
endfor;
echo "<br />", "Массив из 10 случайных чисел: ", implode(", ", $randArr);

echo "<br />", "Модуль разности $a и $b: ", abs($a - $b);
$a=-50;
$b=13;
echo "<br />", "Модуль разности $a и $b: ", abs($a - $b);

$vArr = [1, 2, -1, -2, 3, -3];
$absArr = [];
foreach ($vArr as $value):
    $absArr[] = abs($value);
endforeach;
echo "<br />", "Массив без отрицательных чисел: ", implode(", ", $absArr);

$givenNumber = rand(1, 100);
$givenNumberDividersArr = [];
for ($i=1; $i <= $givenNumber; $i++):
    if ($givenNumber % $i == 0):
        $givenNumberDividersArr[] = $i;
    endif;
endfor;
echo "<br />", "Делители числа $givenNumber: ", implode(", ", $givenNumberDividersArr);

$givenArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$givenArrSum = 0;
$givenArrNum = 0;
for ($i=0; $i <= sizeof($givenArr) && $givenArrSum <= 10; $i++):
    $givenArrSum += $givenArr[$i];
    $givenArrNum ++;
endfor;
echo "<br />", "Необходимо сложить $givenArrNum первых элементов чтобы получилась сумма больше 10.";


// Task 15
echo "<br />", "<b>"."Task 15"."</b>";
function printStringReturnNumber($str)
{
    echo "<br />", $str;
    $num = 15;
    return $num;
}
$my_num = printStringReturnNumber("Artem");
echo "<br />", $my_num;


// Task 16
echo "<br />", "<b>"."Task 16"."</b>";
function increaseEnthusiasm($str)
{
    $str .= "!";
    return $str;
}
echo "<br />", increaseEnthusiasm("Aaa");

function repeatThreeTimes($str)
{
    $str .= " " . $str . " " . $str;
    return $str;
}
echo "<br />", repeatThreeTimes("У него нож.");

echo "<br />", increaseEnthusiasm(repeatThreeTimes("Беги"));

function cut($str, $num = 10)
{
    return substr($str, $num);
}
echo "<br />", cut("111115", 5);

$someArr = [1, 4, 5, 1984, 2024];
function printArr($arr, $index = 0)
{
    if ($index < sizeof($arr)):
        echo $arr[$index], " ";
        printArr($arr, $index + 1);
    endif;
}
echo "<br />", printArr($someArr);

$someNum = rand(999, 9999);
function countDigitsSum($num)
{
    while ($num > 9):
        $digitsSum = 0;
        $strNum = (string)($num);

        for ($i = 0; $i < strlen($strNum); $i++):
            $digitsSum += intval($strNum[$i]);
        endfor;

        $num = $digitsSum;
    endwhile;

    return $num;
}
echo "<br />", countDigitsSum($someNum);


// Task 17
echo "<br />", "<b>"."Task 17"."</b>";