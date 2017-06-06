<?php
    $servername = "localhost";
    $dbName = "cmssystem1";
    $username = "root";
    $password = "";
    
    try {
        $dbh = new PDO("mysql:host=$servername;dbname=$dbName; charset=utf8", $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Succes! Hurra";
    } catch (PDOException $e) {
        echo "Connection failed:".$e->getMessage();
    }

?>