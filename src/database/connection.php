<?php
    /*
    *Database connection with PDO
    *Enviroment variables: host, dbname, user, password
    */
    $host = 'mysql-prueba-alara.alwaysdata.net';
    $database = 'prueba-alara_books';
    $user = '283679_free';
    $password = 'root_123';
    try {
        $connection = new PDO(
            "mysql:host=$host;
            dbname=$database",
            $user,
            $password
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
?>