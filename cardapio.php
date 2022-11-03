<?php
include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eméria</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/3df637a2f2.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="/lib/w3.css">
  <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

  <script>
    $(document).ready(function() {

      $('a.opcao').click(function() {

        let cod = $(this).prop('id');
        $.ajax({
          url: "produtoCardapio.php",
          data: {
            cod: cod
          },
          success: function(result) {
            $('.produto').html(result);
            console.log(result);
          }
        });
      });
    })
  </script>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap");

    * {
      color: white;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Lato", sans-serif;
    }

    html {
      width: 1024px;
      height: 600px;
      color: rgb(255, 255, 255);
      font-family: "Lato", sans-serif;
    }

    body {
      background: linear-gradient(rgba(168, 167, 167, 0.8), rgb(144, 142, 145));
      background-position: center center;
      background-size: cover;
      background-position-y: 0px;
      background-repeat: no-repeat;
      width: 1024px;
      height: 600px;
    }

    header {
      width: 100%;
      font-family: "Lato", sans-serif;
    }

    .menuu {
      background-color: rgb(79, 6, 94);
      color: white;
      border-color: rgb(79, 6, 94);
    }

    .texto {
      font-family: "Lato", sans-serif;
      font-size: small;
    }

    .menu-content {
      text-transform: uppercase;
      display: flex;
      align-items: center;
      font-size: 1.8rem;
      flex-direction: row-reverse;
      justify-content: flex-end;
    }


    .logo {
      font-size: 30px;
      letter-spacing: 0.4rem;
      cursor: pointer;
    }

    .logo h1 {
      margin: 0
    }

    #box {
      display: flex;
      flex-direction: row;
      margin-top: 0;
      height: 538px !important;
      width: 100%;
      background-color: #d9d9d9;
    }

    .menu_esquerda {
      background-color: #500b70;
      display: flex;
      flex-direction: column;
      width: 35% !important;
      height: 538px;
      position: relative;
      top: 0;
      z-index: 1;
      text-transform: uppercase;
      font-size: larger;
      justify-content: space-evenly;
      align-items: center;
      margin-top: 0;
    }

    .produtos {
      width: 65%;
      margin-left: 0;
    }

    ul a {
      color: white;
      text-transform: uppercase;
    }
  </style>

</head>

<body styles='background-color:red;text-transform: uppercase;''>

  <header style="height: 62px; width: 100%">
    <nav class="navbar-dark bg-dark" style="height: 62px; width: 100%">
        <div class="menu-content" style="height: 62px; width: 100%">
          <div class="logo">
            <h1 class="logo" style="color: white; margin:10px;">EMÉRIA</h1>
          </div>

          <div class="float" style="margin:10px;">
            <a style=' font-size: 30px; color:white; text-decoration: none' class='fas fa-cog' data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"></a>
  </div>

  </div>

  <div class="offcanvas menu offcanvas-start  text-white bg-dark " tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenu">
    <div class="offcanvas-header">
      <h3 class="offcanvas-title" id="offcanvasExampleLabel">Configuração</h3>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <h5><a href="/login.php" class="login text-white">Acessar Conta</a></h5>
    </div>
  </div>
  </nav>
  </header>

  <section id="box">
    <div class="float" style="position: fixed; width: 75px; height: 75px; z-index:2; bottom: 2%">
      <a style=' font-size:40px; margin: 20px; color: white; text-decoration:none' class='fas fa-arrow-circle-left' href='/index.php'></a>
    </div>

    <div class="menu_esquerda">

      <?php

      $sqll = "SELECT idCategoria,nomeCategoria FROM categoria";
      $query = mysqli_query($conn, $sqll);

      while ($dados = mysqli_fetch_array($query)) { ?>

        <ul class="nav nav-pills nav-stacked" style="text-decoration:none; color:white;">
          <li>
            <a id="<?= $dados['idCategoria'] ?>" class="opcao" style="text-decoration-line: none;" name="categoria" data-toggle="tab" href="#home">
              <?= $dados['nomeCategoria'] ?>
            </a>
          </li>
        </ul>
      <?php } ?>
    </div>

    <div class="produtos">
      <div class="produto">


      </div>

      <div class="float" style="position: fixed; width: 75px; height: 75px; z-index:2; bottom: 12%; right: 8%">
        <a style=' font-size:100px; margin: 20px; color: white; text-decoration:none' class='fas fa-arrow-circle-left' data-bs-toggle="offcanvas" data-bs-target="#navbarpedido" aria-controls="navbarpedido"></a>
      </div>

      <div class="abaPedido">
        <div class="offcanvas menu offcanvas-end  text-white bg-dark " tabindex="-1" id="navbarpedido" aria-labelledby="navbarpedido">
          <div class="offcanvas-header" style="background-color: #500b70; border-bottom: 2px solid #d9d9d9;">
            <h3 class="offcanvas-title" id="offcanvasExampleLabel">Pedido</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <h5 class="itemPedido text-white">Itens Pedidos</a></h5>

            <?php
            foreach ($_SESSION['venda'] as $prod => $quantidade) {
              $sqlCarrinho = mysqli_query($conn, "SELECT * FROM produto WHERE idProduto = $prod");
              $resAssoc = mysqli_fetch_assoc($sqlCarrinho);
            ?>
              <div class="produtocarrinho">
                <h3><?php echo $dados2['nome'] ?></h3>
                <p><?php echo 'R$' . $dados2['preco'] ?></p>
                <p> <?php echo $quantidade ?> </p>
                <a href="produtoCardapio.php?del=<?php echo $resAssoc['idProduto'] ?>">X</a>
              </div>
            <?php } ?>

          </div>
        </div>
      </div>

    </div>
  </section>

</body>

</html>