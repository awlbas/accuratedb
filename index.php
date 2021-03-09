<?php
    $username = "CPS#1";
    $password = "password";
    $dsn = 'firebird:dbname=172.20.0.2/3050:/firebird/data/gls2019.gdb';

    try {
        $dbh = new PDO($dsn, $username, $password);
        echo "Connected successfully";
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit;
    }
?>