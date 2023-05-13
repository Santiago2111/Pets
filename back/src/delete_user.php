<?php
    include("../config/connectionDB.php");
    $id = $_GET['userId'];
    $sql = "DELETE FROM users WHERE id = '$id'";
    if($conn -> query($sql) === TRUE){
        if($conn -> affected_rows > 0){
            echo "<script>alert('User has been deleted')</script>";
            header('refresh:0;url=http://127.0.0.1/Pets/back/src/list_users.php');
        }else{
            echo "<script>alert('User has not been found)</script>";
            header('refresh=0;url=http://127.0.0.1/Pets/back/src/list_users.php');
        }
    }else{
        echo "Error: ".$conn->error;
    }
?>