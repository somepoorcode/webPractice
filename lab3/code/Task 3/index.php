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
                $categoriesDirectory = './categories/';
                $files = scandir($categoriesDirectory);
                foreach ($files as $file) {
                    if ($file !== '.' && $file !== '..' && is_dir($categoriesDirectory . $file)) {
                        $categoryName = basename($file);
                        echo "<option value=\"$categoryName\">" . ucfirst($categoryName) . "</option>";
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
                $categoriesDirectory = './categories/';
                $categories = scandir($categoriesDirectory);

                foreach ($categories as $category) {
                    if ($category !== '.' && $category !== '..' && is_dir($categoriesDirectory . $category)) {
                        $files = scandir($categoriesDirectory . $category);

                        foreach ($files as $file) {
                            if ($file !== '.' && $file !== '..') {
                                $filePath = $categoriesDirectory . $category . '/' . $file;
                                $fileContents = file_get_contents($filePath);
                                $fileContentsArray = explode("\n", $fileContents);

                                echo "<tr>";
                                echo "<td>" . ($fileContentsArray[0]) . "</td>";
                                echo "<td>" . ucfirst($category) . "</td>";
                                echo "<td>" . ($fileContentsArray[2]) . "</td>";
                                echo "<td>" . ($fileContentsArray[3]) . "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                }
                ?>
            </tbody>

            </tbody>
        </table>
    </div>
</body>
</html>