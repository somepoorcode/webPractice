<?php
session_start();
echo "<b>"."Task 2."."</b>", "<br />";
echo "<b>"."B"."</b>", "<br />";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Форма ввода данных</title>
</head>
<body>
<form action="output.php" method="post">
    <label for="lastname">Фамилия:</label><br />
    <input type="text" name="lastname" id="lastname" required><br />
    <label for="name">Имя:</label><br />
    <input type="text" name="name" id="name" required><br />
    <label for="age">Возраст:</label><br />
    <input type="number" name="age" id="age" required><br />
    <input type="submit" value="Отправить">
</form>
</body>
</html>
