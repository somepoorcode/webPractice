<?php
function getOutNow(): void
{
    header('Location: /');
    exit();
}


if (false === isset($_POST['mail'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    getOutNow();
}

$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$filePath = "./categories/{$category}/{$title}.txt";
if (false === file_put_contents($filePath, $description)) {
    throw new Exception('Something went wrong.');
}
getOutNow();

?>
