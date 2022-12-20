<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PDO - PHP</title>
</head>
<body>
    <?php
    include './src/database/connection.php';
    $rows = $connection->query("SELECT * FROM books");
    while($row = $rows->fetch()){
        echo "<ul>";
        echo "<li>";
        echo $row['book_id'];
        echo "</li>";
        echo "</ul>";
    };
    ?>
</body>
</html>
