<?php
    //Get DataBase Connection
    include("../config/connectionDB.php");
    //Get Data
    $email = $_POST['email'];
    $password = md5($_POST['passwd']);
    //Create query
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        header("Location:http://127.0.0.1/pets/front/src/home.html");
    }else{
        header("Location:http://127.0.0.1/pets/front/src/login.html");
    }
?>