<?php

$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="emeria";

$conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
  or die ('Could not connect to the database server' . mysqli_connect_error());
  mysqli_report(MYSQLI_REPORT_OFF);
//$con->close();
//se conectou:

//if ($conn->connect_error) {
 //  die("Connection failed: " . $conn->connect_error);
//}else {
  //  echo "CONECTADO!";
//}



//$con->close();



