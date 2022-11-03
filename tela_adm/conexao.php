<?php
$host="localhost";
$port=3307;
$user="root";
$password="";
$dbname="emeria";

$conn = new mysqli($host, $user, $password, $dbname, $port);

//se conectou:

//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//}else {
  //  echo "CONECTADO!";
//}



//$con->close();
?>
