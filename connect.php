<?php
    $servername = "localhost";
    $dbName = "cmssystem1":
    $username = "root"
    $password = "";
    
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=$dbName; charset=utf8', $username, $password);
        $dbh->setAttribute(PDO::ATTER_ERRMODE, PDO::ERRMODE_EXEPTION);
        echo "Succes! Hurra";
    } catch (PDOException $e) {
        echo "Connection failed:".$e->getMassage();
    }

?>