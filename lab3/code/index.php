<?php
echo "<b>"."Task 2."."</b>", "<br />";
echo "<b>"."A"."</b>", "<br />";
if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $wordCount = preg_match_all('/\p{L}+/u', $text);
    $charCount = mb_strlen($text);
    echo "Количество слов: {$wordCount}<br />";
    echo "Количество символов: {$charCount}";
}
?>

<form method="post" action="">
    <textarea name="text" rows="1" cols="30"></textarea><br />
    <input type="submit" name="submit" value="Отправить">
</form>