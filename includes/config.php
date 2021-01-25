<?php
    ob_start(); // Turns on output buffering
    session_start(); // Use session 

    date_default_timezone_set("Asia/Seoul");

    try {
        $con = new PDO("mysql:dbname=VideoTube;host=localhost", "root" , "");
    }
    catch (PDOException $e) {
        echo "Connection failed: " .$e->getMessage();
    }
?>