<?php

$host="localhost";
$port=3306;
$user="root";
$password="";
$dbname="emeria";

$conn = new mysqli($host, $user, $password, $dbname, $port)
  or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
//se conectou:

//if ($conn->connect_error) {
  //die("Connection failed: " . $conn->connect_error);
//}else {
  // echo "CONECTADO!";
//}



//$con->close();



