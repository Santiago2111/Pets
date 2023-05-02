<?php
    //Get DataBase Connection
    include("../config/connectionDB.php");
    //Get Data
    $email = $_POST['email'];
    $password = md5($_POST['passwd']);
    //Create query
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$passwd'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        //echo "The user exists";
        header("Location:http://127.0.0.1/pets/front/src/home.html");
    }else{
        echo "The user doesn't exist or ivalid data";
    }
?>