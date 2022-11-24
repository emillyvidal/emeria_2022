<?php
include_once('conexao.php');


if (isset($_POST['submitconfig'])) {
  $mesa = $_POST['mesa'];
  $senhaUsuario = $_POST['senha'];
  $sql1 = "SELECT senha FROM administrador WHERE senha= '$senhaUsuario'";
  $query1 = mysqli_query($conn, $sql1);
  
  if (mysqli_affected_rows($conn) == 1) {
    //$sql = "INSERT INTO mesa(Idmesa) VALUES ('$mesa')";
    $querycomanda = mysqli_query($conn, "SELECT * FROM comanda WHERE idComanda= '$mesa'");
    if (mysqli_num_rows($querycomanda) == 0) {
      session_start();

      $query = mysqli_query($conn, "INSERT INTO comanda(idComanda) VALUES ('$mesa')");
      $_SESSION['comanda'] = $mesa;
      header('location:cardapio.php');
    } elseif (mysqli_num_rows($querycomanda) == 1) {
      session_start();
      $_SESSION['comanda'] = $mesa;
      header('location:cardapio.php');
    } else {
      session_start();
      $_SESSION['comanda'] = array();
      echo "<script>alert('Esta mesa já existe!');</script>";
    }
  }
}


?>