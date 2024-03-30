<?php
session_start();
echo "<b>"."Task 2."."</b>", "<br />";
echo "<b>"."C"."</b>", "<br />";

if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['salary']) && isset($_POST['eyecolor'])) {
    $_SESSION['user_data'] = [
        'Имя' => $_POST['name'],
        'Возраст' => $_POST['age'],
        'Зарплата' => $_POST['salary'],
        'Цвет глаз' => $_POST['eyecolor']
    ];
}

if (isset($_SESSION['user_data'])) {
    echo "<ul>";
    foreach ($_SESSION['user_data'] as $key => $value) {
        echo "<li>" . $key . ": " . $value . "</li>";
    }
    echo "</ul>";
}
?>
