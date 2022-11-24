<?php 
      include_once('headerindex.php'); 
      include_once('conexao.php');
      session_start();?>

<?php 
  if(isset($_SESSION['comanda'])){
    $comanda = $_SESSION['comanda'];
    $sqlpedido ="SELECT * FROM produto,itenspedido, pedido,comanda WHERE produto.idProduto = itenspedido.idProduto 
                                                                  AND itenspedido.idPedido=pedido.idPedido 
                                                                  AND pedido.idComanda=comanda.idComanda
                                                                  AND comanda.idComanda = '$comanda'";
    $query = mysqli_query($conn, $sqlpedido);
    #$quantidade = mysqli_query($conn,"SELECT * FROM itenspedido,pedido,comanda WHERE itenspedido.idPedido=pedido.idPedido 
                                                                  #AND pedido.idComanda=comanda.idComanda
                                                                  #AND comanda.idComanda = '$comanda'");
  }else{
      echo "<h3>Indique o Número da mesa.</h3>";
 };  ?>

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
    
  </div>

  </div>

  <div id="id01" class="w3-modal" style="overflow-y:hidden ;">
    <div class="w3-modal-content w3-animate-zoom w3-container"style="overflow-y: scroll;background-color:#212529;padding:0; height:90%;">
        <div class="modal-header" style="background-color: #500b70; border-bottom: 2px solid #d9d9d9;">
            <h3 class="offcanvas-title" id="offcanvasExampleLabel">Comanda</h3>
            <button type="button" class="btn-close"  
            onclick="document.getElementById('id01').style.display='none'"class="w3-button w3-display-topright">
            </button>
        </div>     
      <div class="modal-body" >
        <?php 
        $totalProduto = 0;
        while($row = mysqli_fetch_array($query)){ ?>      
              <div class="produtocarrinho">
                      <div class="img" name="imgProduto" >
                          <img src="./imagens/<?= $row['5'] ?> " class="img img-responsive" style="border-radius: 12px; height: 100px !important; width:100px !important;">
                      </div>
                      <div class="informacoes" >
                          <div class="descitem">
                              <h4><?php echo $row['2'] ?></h4>
                              <p>R$ <?php echo number_format($row['3'], 2, ",", "."); ?></p>
                              <p>Quantidade:<?php echo $row['8'] ?> </p>
                              
                          </div>
                      </div>
                </div>
                <?php
                $preco = $row['3'];
                $totalProduto += $preco * $row['8'];
                 }; ?>
      </div>
      <footer >
          <h3>Total: R$ <?php echo number_format($totalProduto, 2, ",", "."); ?></h3>
      </footer>
    </div>
  </div>


  <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>

</html>