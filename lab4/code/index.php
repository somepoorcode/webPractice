<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device_width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marketplace</title>
</head>
<body>
    <div id="form">
        <form action="save.php" method="post">
            <label for="email">Email</label><br />
            <input type="email" name="mail" required style="width: 292px;height: 15px;"><br />

            <label for="category">Categories</label><br />
            <select name="category" required style="width: 300px;height: 22px;">
                <?php
                require __DIR__ . '/vendor/autoload.php';
                $client = new \Google_Client();
                $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
                $client->setAuthConfig(__DIR__ . '/key.json');

                $service = new Google_Service_Sheets($client);

                $spreadsheetId = '16wMqqQoSJlNddFLXJ-Y7SXs-flDv3z6e124R640c1Y8';
                $range = 'Лист1!B:B';

                $response = $service->spreadsheets_values->get($spreadsheetId, $range);
                $values = $response->getValues();
                $existingCategories = [];

                if (!empty($values)) {
                    foreach ($values as $row) {
                        $categoryName = $row[0];
                        if (!empty($categoryName) && !in_array($categoryName, $existingCategories)) {
                            $existingCategories[] = $categoryName;
                            echo "<option value=\"{$categoryName}\">" . ucfirst($categoryName) . "</option>";
                        }
                    }
                }
                ?>
            </select><br />

            <label for="title">Title</label><br />
            <input type="text" name="title" required style="width: 292px;height: 16px;"><br />

            <label for="description">Description</label><br />
            <textarea rows="10" name="description" style="width: 294px;resize: none;"></textarea><br/>

            <input type="submit" value="Save">
        </form>
    </div>
    <div id="table">
        <table>
            <thead>
                <th>Email</th>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
            </thead>
            <tbody>
            <tbody>
            <?php
            $range = 'Лист1';
            $response = $service->spreadsheets_values->get($spreadsheetId, $range);
            $values = $response->getValues();

            if (!empty($values)) {
                foreach ($values as $row) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row[0]) . "</td>";
                    echo "<td>" . htmlspecialchars(ucfirst($row[1])) . "</td>";
                    echo "<td>" . htmlspecialchars($row[2]) . "</td>";
                    echo "<td>" . htmlspecialchars($row[3]) . "</td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>

            </tbody>
        </table>
    </div>
</body>
</html>