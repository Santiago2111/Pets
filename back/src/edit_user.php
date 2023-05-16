<?php
include("../config/connectionDB.php");
$id = $_GET['userId'];
$sql="SELECT * FROM users WHERE id = '$id'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $f_name = $row['first name'];
        $l_name = $row['last name'];
        $ident = $row['number_id'];
        $address = $row['address'];
        $mobile = $row['cellphone'];
        $email = $row['email'];
    }  
}
ob_start(); // Capturar el contenido de salida
ob_end_clean(); // Limpiar el contenido de salida
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets | Edit User</title>
    <link rel ="icon" type="image/x-icon" href="../images/pets.png">
    <link rel="stylesheet" type="text/css" href="../estilos.css">
    <style>
        body{
            background-image: url("../images/background.avif");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <form name="editUserForm" action="http://127.0.0.1/pets/back/src/update_user.php" method="POST">
        <center><h1>Create User</h1></center>
        <center><label>First name </label><input type="text" name="f_name" required><br><br>
        <label>Last name </label><input type="text" name="l_name" required><br><br>
        <label>Id num </label><input type="text" name="id_num" required><br><br>
        <label>Address </label><input type="text" name="address" required><br><br>
        <label>Cellphone </label><input type="text" name="cell_phone" required><br><br>
        <label>Email </label><input type="email" name="email" required><br><br>
        <label>Password </label><input type="password" name="passwd" required><br><br>
        <button>Register </button></center>
    </form>
</body>
</html>