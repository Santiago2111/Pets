<?php
    //Developer: Santiago
    //MySQL engine credentials
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "pets";
    $port = "3306";
    //Create Connection
    $conn = new mysqli($host, $username, $password, $dbname, $port);
    //Check Connection
    if($conn->connect_error){
        echo "Connection Failed: ".$conn->connection_error;
    }
    ob_start(); // Capturar el contenido de salida
    ob_end_clean(); // Limpiar el contenido de salida
?>