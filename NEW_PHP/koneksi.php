<?php
    try { //naming a class
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_sensor";
 
        $PDO = new PDO("mysql:host=" . $host . ";dbname=" . $dbname . ";charset=utf8", $username, $password); //prepare PDO protocol
    } catch (PDOException $erro) { //check PDO protocol is succesful or not
        echo "Gagal Terhubung ke database : " . $erro->getMessage();
    }
 
?>
