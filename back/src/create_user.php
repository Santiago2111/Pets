<?php
    include("../config/connectionDB.php");
    //Get data
    $fName=$_POST['f_name'];
    $lName=$_POST['l_name'];
    $idNum=$_POST['id_num'];
    $address=$_POST['address'];
    $cellPhone=$_POST['cell_phone'];
    $email=$_POST['email'];
    $pass=md5($_POST['passwd']);

    $sql="INSERT INTO users (first_name, last_name, number_id, address, cellphone, email, password) 
    VALUES ('$fName', '$lName','$idNum', '$address', '$cellPhone', '$email', '$pass')";
    
    //$conn->query($sql);
    if($conn->query($sql)===TRUE){
        //echo ".:: USER HAS BEEN CREATED SUCCESSFULY ::.";
        echo "<script>alert('User has benn created successfuly')</script>";
        header("refresh:0;url=http://127.0.0.1/pets/front/src/login.html");
    }else{
        //echo "ERROR: ".$conn->error."<br>".$sql;
        echo"<script>alert('User wasn't created successfuly')</script>";
        header("refresh:0;url=http://127.0.0.1/pets/front/src/createuser.html");
    }
?>