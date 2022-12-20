<?php
    include '../database/connection.php';
    $insert = $connection->prepare(
        "INSERT INTO books(book_id, book_name, book_author, book_price)
            VALUES (?,?,?,?)
        ");
    $insert->execute(array(
        2,
        'Voldemort',
        'Jefrey Dammer',
        '1500'
    ));
?>