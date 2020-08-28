<?php
    ob_start();
    session_start();

    date_default_timezone_set("America/New_York");

    try {
        $con = new PDO("mysql:dbname=DaFlix;host=localhost", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        exit("Connection failed: " . $e->getMessage());
    } 
?>