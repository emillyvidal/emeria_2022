<?php 
      include_once('headerindex.php'); 
      include_once('conexao.php');
      session_start();?>

<?php 
  $comanda = $_SESSION['comanda'];
  if(isset($_SESSION['comanda'])){
    $querypedido = mysqli_query($conn,"SELECT idPedido FROM pedido WHERE idComanda = '$comanda'");
    $idPedido = mysqli_fetch_array($querypedido);
    $sqlselect = "SELECT * FROM itenspedido WHERE idPedido = '$idPedido'";
    $queryselect = mysqli_query($conn, $sqlselect);
    $resultado = mysqli_fetch_array($queryselect);
    var_dump($resultado);
  };
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Eméria</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/4f1451ffa0.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>  
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="styles/index.css" rel="stylesheet">

</head>

<body styles='background-color:red; text-transform: uppercase;'>

  <div id="box" style="  background-color: #212529;font-size: 1.5em; text-transform: uppercase; font-family: ' Lato', sans-serif;">
  <div class="menu_esquerda">
    <button onclick="document.location='/cardapio.php'">Cardápio</button>
    <button onclick="document.getElementById('id01').style.display='block'">Minha Comanda</button>
  </div>


  <div class="boxDestaques">

    <?php
    include('destaques.php');
    ?>
    <!--<div class="iframe">
        <iframe src="destaques.php" width=664px height=554px name="destaques"></iframe>
      </div>-->
  </div>

  </div>

  <div id="id01" class="w3-modal" >
    <div class="w3-modal-content w3-animate-zoom w3-container"style="background-color:#212529;padding:0; height:90%;">
        <div class="modal-header" style="background-color: #500b70; border-bottom: 2px solid #d9d9d9;">
            <h3 class="offcanvas-title" id="offcanvasExampleLabel">Comanda</h3>
            <button type="button" class="btn-close"  
            onclick="document.getElementById('id01').style.display='none'"class="w3-button w3-display-topright">
            </button>
        </div>     
      <div class="modal-body">
        <p>Some text..</p>
        <p>Some text..</p>
      </div>
      <footer >
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>


  <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>

</html>