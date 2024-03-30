<?php
echo "<b>"."Task 1. Regular expressions"."</b>", "<br />";
echo "<b>"."A"."<b>", "<br />";
$str = 'abba acda acdca aboba ava';
$regExp = '/a..a/';
$matches = [];
$count = preg_match_all($regExp, $str, $matches);
echo "Количество найденных строк: {$count}", "<br />";
var_dump($matches);