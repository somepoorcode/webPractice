<?php
session_start();
echo "<b>"."Task 2."."</b>", "<br />";
echo "<b>"."C"."</b>", "<br />";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Форма ввода данных</title>
</head>
<body>
<form action="output.php" method="post">
    <label for="name">Имя:</label><br />
    <input type="text" name="name" id="name" required><br />
    <label for="age">Возраст:</label><br />
    <input type="number" name="age" id="age" required><br />
    <label for="salary">Зарплата:</label><br />
    <input type="number" name="salary" id="salary" required><br />
    <label for="eyecolor">Цвет глаз:</label><br />
    <input type="text" name="eyecolor" id="eyecolor" required><br />
    <input type="submit" value="Отправить">
</form>
</body>
</html>