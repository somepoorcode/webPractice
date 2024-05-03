<?php
function getOutNow(): void
{
    header('Location: /');
    exit();
}


if (false === isset($_POST['mail'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    getOutNow();
}

$mail = $_POST['mail'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$fileContains = "$mail\n$category\n$title\n$description";

$filePath = "./categories/{$category}/{$title}.txt";
if (false === file_put_contents($filePath, $fileContains)) {
    throw new Exception('Something went wrong.');
}
chmod($filePath, 0777);
getOutNow();

?>
