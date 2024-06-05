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
            <option value="cars">Cars</option>
            <option value="electronics">Electronics</option>
            <option value="food">Food</option>
            <option value="other">Other</option>
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
        <?php
        $conn = new mysqli("db", "root", "1111", "web");

        $sql = "SELECT email, category, title, description FROM ad";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["category"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["title"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["description"]) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
