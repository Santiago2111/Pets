<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pets";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Selección de datos de la tabla "users"
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Generación de la tabla HTML
if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr><th>First name</th><th>Last name</th><th>Numer id</th><th>address</th></tr><tr><th>Cellphone</th><th>email</th><th>password</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["first_name"] . "</td>";
    echo "<td>" . $row["last_name"] . "</td>";
    echo "<td>" . $row["number_id"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "<td>" . $row["cellphone"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No se encontraron resultados.";
}

$conn->close();
?>
