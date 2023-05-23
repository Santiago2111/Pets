<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pets | List Users</title>
  <link rel="icon" type="image/png" href="../../front/images/pets.png">
  <style>
   body {
      background-image: url('../../front/images/background.avif');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
   }
</style>

</head>
<body>
  <table border="5" align="center">
    <tr><th colspan="7">List all users</th></tr>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Identification</th>
      <th>Address</th>
      <th>Cellphone</th>
      <th>Email</th>
      <th>Settings</th>
    </tr>
    <?php
    include("../config/connectionDB.php");
    $sql="SELECT * FROM users";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo "<tr>
        <th>".$row['first_name']."</th>
        <th>".$row['last_name']."</th>
        <th>".$row['number_id']."</th>
        <th>".$row['address']."</th>
        <th>".$row['cellphone']."</th>
        <th>".$row['email']."</th>
        <td>
          <a href='http://127.0.0.1/Pets/back/src/delete_user.php?userId=".$row['id']."'>
            <img src='../../front/icons/delete.png' width='40'></a>&nbsp;&nbsp;
          <a href='http://127.0.0.1/Pets/back/src/edit_user.php?userId=".$row['id']."'>
            <img src='../../front/icons/update.png' width='40'></a>
        </td>
        </tr>";
      }  
    }
    ob_start(); // Capturar el contenido de salida
    ob_end_clean(); // Limpiar el contenido de salida
    ?>
    </table>
    <br>
    <center><button onclick="location.href='http://127.0.0.1/pets/'">Home</button></center></center>
</body>
</html>