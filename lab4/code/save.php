<?php
require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAuthConfig(__DIR__ . '/key.json');

$service = new Google_Service_Sheets($client);

$spreadsheetId = '16wMqqQoSJlNddFLXJ-Y7SXs-flDv3z6e124R640c1Y8';
$range = 'Лист1';

$email = $_POST['mail'];
$category = ucfirst($_POST['category']);
$title = $_POST['title'];
$description = $_POST['description'];

$values = [
    [$email, $category, $title, $description]
];

$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);

$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

header('Location: index.php');
exit;