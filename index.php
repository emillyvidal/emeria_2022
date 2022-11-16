<?php include_once('headerindex.php');  ?>

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
  <link href="styles/index.css" rel="stylesheet">

</head>

<body styles='background-color:red; text-transform: uppercase;'>
  <!-- <header style="height: 62px; width: 100%">
    <nav class="navbar-dark bg-dark" style="height: 62px; width: 100%">
      <div class="menu-content" style="height: 62px; width: 100%; border-bottom: solid 3px white;">
        <div class="logo">
          <h1 class="logo" style="color: white;">Eméria</h1>
        </div>

        <div class="float" style="margin:10px;">
          <a style='font-size: 36px; color:white; text-decoration: none' class='fas fa-cog' data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"></a>
        </div>

      </div>

      <div class="menu offcanvas  offcanvas-start  text-white bg-dark " tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenu">
        <div class="offcanvas-header" style="background-color: #500b70">
          <h3 class="offcanvas-title" id="offcanvasExampleLabel">Configuração</h3>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <h5><a href="/login.php" class="login text-white">Acessar Conta</a></h5>
        </div>
      </div>

    </nav>
  </header>
-->



  <div id="box" style="  background-color: #212529;font-size: 1.5em; text-transform: uppercase; font-family: ' Lato', sans-serif;">
    <div class="menu_esquerda">
      <button onclick="document.location='./cardapio.php'">Cardápio</button>
      <button onclick="">Minha Comanda</button>
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

  <div class="abaPedido">
  </div>


  <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>

</html>