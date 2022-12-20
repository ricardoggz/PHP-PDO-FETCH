<?php
    include '../database/connection.php';
    $rows = $connection->query("SELECT * FROM books");
    while($row = $rows->fetch(PDO::FETCH_LAZY)){
        echo var_dump($row);
        echo $row[0];
        echo $row['book_name'];
        echo $row->book_author;
    }
?>