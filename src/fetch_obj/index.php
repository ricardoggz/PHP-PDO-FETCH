<?php
    include '../database/connection.php';
    $rows = $connection->query("SELECT * FROM books");
    while($row = $rows->fetch(PDO::FETCH_OBJ)){
        echo "<ul>";
        echo "<li>";
        echo $row->book_id." ".$row->book_name;
        echo "</li>";
        echo "</ul>";
    }
?>