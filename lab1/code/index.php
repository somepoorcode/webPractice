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
$myNum = printStringReturnNumber("Artem");
echo "<br />", $myNum;


// Task 16
echo "<br />", "<b>"."Task 16"."</b>";
function increaseEnthusiasm($str)
{
    $str .= "!";
    return $str;
}
echo "<br />", "Результат работы increaseEnthusiasm(): ", increaseEnthusiasm("Aaa");

function repeatThreeTimes($str)
{
    $str .= " " . $str . " " . $str;
    return $str;
}
echo "<br />", "Результат работы repeatThreeTimes(): ", repeatThreeTimes("У него нож.");

echo "<br />", "Результат работы increaseEnthusiasm(repeatThreeTimes()): ",
increaseEnthusiasm(repeatThreeTimes("Беги"));

function cut($str, $num = 10)
{
    return substr($str, $num);
}
echo "<br />", "Результат работы cut() при вводе строки '111115' и числа 5: ", cut("111115", 5);

$someArr = [1, 4, 5, 1984, 2024];
function printArr($arr, $index = 0)
{
    if ($index < sizeof($arr)):
        echo $arr[$index], " ";
        printArr($arr, $index + 1);
    endif;
}
echo "<br />", "Вывод массива с помощью рекурсии: ", printArr($someArr);

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
echo "<br />", "Сумма цифр массива: ", countDigitsSum($someNum);


// Task 17
echo "<br />", "<b>"."Task 17"."</b>";
$xArr = [];
function arrayFillWithXxx($arr, $num)
{
    for ($i=1; $i <= $num; $i++):
        $arr[$i-1] = str_repeat("x", $i);
    endfor;
    return $arr;
}
echo "<br />", "Массив, заполненый 'x', 'xx', 'xxx', ...: ", implode(", ", arrayFillWithXxx($xArr, 5));

function arrayFill($str, $num)
{
    $arr = [];
    for ($i=1; $i <= $num; $i++):
        $arr[$i-1] = $str;
    endfor;
    return $arr;
}
echo "<br />", "Массив, заполненный заданными значениями: ", implode(", ", arrayFill("lol", 5));

$twoDimensionalArr = [[158, 13, 2], [1, 7], [89]];
function sumArray($arr)
{
    $sum = 0;
    foreach ($arr as $value):
        if (is_array($value)):
            $sum += sumArray($value);
        else:
            $sum += $value;
        endif;
    endforeach;
    return $sum;
}
echo "<br />", "Сумма двумерного массива: ", sumArray($twoDimensionalArr);

function createTwoDimensionalArray($rows, $columns)
{
    for ($i = 0; $i < $rows; $i++):
        $arr[$i] = [];
        for ($j = 0; $j < $columns; $j++):
            $arr[$i][$j] = ($i * $columns) + ($j + 1);
        endfor;
    endfor;

    return $arr;
}
$createdArr = createTwoDimensionalArray(3, 3);
echo "<br />", "Созданный двумерный массив: ", "<br />";
for ($i = 0; $i < sizeof($createdArr); $i++):
    for ($j = 0; $j < sizeof($createdArr[$i]); $j++):
        echo $createdArr[$i][$j]." ";
    endfor;
    echo "<br />";
endfor;

$multiArr = [2, 5, 3, 9];
$result = ($multiArr[0] * $multiArr[1]) + ($multiArr[2] * $multiArr[3]);
echo "Результат операций с массивом [2, 5, 3, 9]: ", $result;

$user = ['name' => 'Bogdan', 'surname' => 'Vavilov', 'patronymic' => 'Sergeevich'];
echo "<br />", "Имя, фамилия, отчество: ", $user['name'].' '.$user['surname'].' '.$user['patronymic'];

$date = ['year' => '2024', 'month' => '03', 'day' => '08'];
echo "<br />", "Дата: ", $date['year'].'-'.$date['month'].'-'.$date['day'];

$arr1 = ['a', 'b', 'c', 'd', 'e'];
echo "<br />", "Количество элементов массива ['a', 'b', 'c', 'd', 'e']: ", sizeof($arr1);

$arr2 = ['a', 'b', 'c', 'd', 'e'];
echo "<br />", "Последний элемент массива ['a', 'b', 'c', 'd', 'e']: ", $arr1[4];
echo "<br />", "Предпоследний элемент массива ['a', 'b', 'c', 'd', 'e']: ", $arr1[3];


// Task 18
echo "<br />", "<b>"."Task 18"."</b>";
function checkSum($num, $num1)
{
    if (($num + $num1) > 10):
        return "true";
    else:
        return "false";
    endif;
}
echo "<br />", "Результат при сложении 1 и 11: ", checkSum(1, 11);
echo "<br />", "Результат при сложении 2 и 3: ", checkSum(2, 3);

function checkEqual($num, $num1)
{
    if ($num == $num1):
        return "true";
    else:
        return "false";
    endif;
}
echo "<br />", "Результат при сравнении 5 и 5: ", checkEqual(5, 5);
echo "<br />", "Результат при сравнении 2 и 3: ", checkEqual(2, 3);

$test = 1;
if ($test == 0): echo "верно"; endif;

$age = rand(1, 150);
function checkAge($age)
{
    if (($age > 10) && ($age < 99)):
        $sum = ($age % 10) + (int)($age / 10);
        echo "<br />", "Сумма цифр $age: ", $sum;
        echo "<br />", "Сумма цифр $age двузначна.";
    elseif ($age > 99):
        echo "<br />", "Число $age вне диапозона от 10 до 99.";
    else:
        echo "<br />", "Сумма цифр $age однозначна.";
    endif;
}
checkAge($age);

$mysteryArr = [1, 2, 3];
function checkArrayElements($arr)
{
    $sum = 0;
    if (sizeof($arr) == 3):
        for ($i = 0; $i < sizeof($arr); $i++):
            $sum += $arr[$i];
        endfor;
        echo "<br />", "Сумма трёх элементов массива: ", $sum;
    else:
        echo "<br />", "В массиве не три элемента ровно.";
    endif;
}
checkArrayElements($mysteryArr);


// Task 19
echo "<br />", "<b>"."Task 19"."</b>";
$rows = 20;
echo "<br />", "Пирамидка:";
for ($i = 1; $i <= $rows; $i++):
    echo "<br />", str_repeat("x", $i);
endfor;