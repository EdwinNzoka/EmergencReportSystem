<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "emergencysystem";
 $con = mysqli_connect($servername,$username,$password,$db_name);
if ($con->connect_error){
  die("Connection Failed". $conn->connect_error);
}
?>
