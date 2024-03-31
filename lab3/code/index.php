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
</body>
</html>