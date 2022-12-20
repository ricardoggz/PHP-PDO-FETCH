<?php
    include '../database/connection.php';
    $rows = $connection->query("SELECT * FROM books");
    while($row = $rows->fetch(PDO::FETCH_BOTH)){
        echo $row[0];
        echo $row['book_name'];
    }
?>