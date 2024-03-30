<?php
echo "<b>"."Task 1. Regular expressions"."</b>", "<br />";
echo "<b>"."A"."</b>", "<br />";
$str = 'abba acda acdca aboba ava';
$regExp = '/a..a/';
$matches = [];
$count = preg_match_all($regExp, $str, $matches);
echo "Изначальная строка: {$str}", "<br />";
echo "Количество строк, соответствующих шаблону: {$count}", "<br />";
echo "Эти строки: ", implode(', ', $matches[0]);

echo "<br />", "<b>"."B"."</b>", "<br />";
$text = 'a1b2c3';
$regExpCubes = '/([a-z])([0-9])/';
$result = preg_replace_callback($regExpCubes, function($matches){
        return $matches[1] . pow($matches[2], 3);
}, $text);
echo "Изначальная строка: {$text}", "<br />";
echo "Результат замены: {$result}";