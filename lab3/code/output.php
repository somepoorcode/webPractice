<?php
session_start();
echo "<b>"."Task 2."."</b>", "<br />";
echo "<b>"."B"."</b>", "<br />";

if (isset($_POST['lastname']) && isset($_POST['name']) && isset($_POST['age'])) {
    $_SESSION['user_lastname'] = $_POST['lastname'];
    $_SESSION['user_name'] = $_POST['name'];
    $_SESSION['user_age'] = $_POST['age'];
}

if (isset($_SESSION['user_lastname']) && isset($_SESSION['user_name']) && isset($_SESSION['user_age'])) {
    echo "Фамилия: " . $_SESSION['user_lastname'] . "<br />";
    echo "Имя: " . $_SESSION['user_name'] . "<br />";
    echo "Возраст: " . $_SESSION['user_age'];
}
?>
