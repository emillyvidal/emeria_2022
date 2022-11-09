<?php
include_once('headerindex.php');
include('pedido.php');
include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Eméria</title>

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/4f1451ffa0.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
      $.ajax({
          url: "produtoCardapio.php",
          success: function(result) {
            $('.produto').html(result);
            console.log(result);
          }
        });

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
      border-bottom: solid 3px white;
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
      border-bottom: solid 3px white;
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
      background-color: #212529;
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
      border-right: solid 1px white;
    }

    .produto {
      width: 65%;
      margin-left: 0;
    }

    ul a {
      color: white;
      text-transform: uppercase;
    }
  </style>

</head>

<body styles='background-color:red; text-transform: uppercase;'>
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

    <div class="produto">
      

    </div>

    </div>


  </section>

</body>

</html>