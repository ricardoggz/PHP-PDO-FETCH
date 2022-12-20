<?php
    include '../database/connection.php';
    $rows = $connection->query("SELECT * FROM books");
    while($row = $rows->fetch(PDO::FETCH_NUM)){
        echo $row[0];
    }
?>