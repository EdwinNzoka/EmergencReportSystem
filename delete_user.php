<?php
if (isset($_GET["name"])){
  $id = $_GET["name"];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "emergencysystem";

  $conn = new mysqli($servername, $username, $password, $database);

  $sql = "DELETE FROM emergencies WHERE name=$name";
  $connection->query($sql);
}

header("location: users.php");
exit;
?>
