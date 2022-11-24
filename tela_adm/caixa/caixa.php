<?php include_once('/xampp/htdocs/conexao.php');
session_start();

if (isset($_POST['btn_pesquisar'])) {
  $comanda = $_POST['comanda'];
  $sqlpedido = "SELECT * FROM produto,itenspedido, pedido,comanda WHERE produto.idProduto = itenspedido.idProduto 
                                                                  AND itenspedido.idPedido=pedido.idPedido 
                                                                  AND pedido.idComanda=comanda.idComanda
                                                                  AND comanda.idComanda = '$comanda'";
  $query = mysqli_query($conn, $sqlpedido);

};

if (isset($_POST['encerrar'])) {
  $comanda = $_SESSION['comanda'];
  $sqlpedido = "SELECT * FROM produto,itenspedido, pedido,comanda WHERE produto.idProduto = itenspedido.idProduto 
  AND itenspedido.idPedido=pedido.idPedido 
  AND pedido.idComanda=comanda.idComanda
  AND comanda.idComanda = '$comanda'";
  $query2 = mysqli_query($conn, $sqlpedido);

  $sql1 = "SELECT * FROM emeria.itenspedido AS ip
    INNER JOIN pedido AS p ON ip.idPedido=p.idPedido
    WHERE p.idComanda='$comanda'";
  $query1 = mysqli_query($conn, $sql1);
  while ($resultado = mysqli_fetch_array($query1)) {
    $sql2 = "DELETE FROM itenspedido WHERE idPedido='{$resultado['idPedido']}'";
    mysqli_query($conn, $sql2);
  }
  $sql3 = "DELETE FROM pedido WHERE idComanda='$comanda'";
  mysqli_query($conn, $sql3);

  echo "<script>alert('Comanda finalizada com sucesso.');</script>";

};
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/4f1451ffa0.js" crossorigin="anonymous"></script>
  <link href="styleCaixa.css" rel="stylesheet">
  <title>Comanda</title>

  
</head>

<body>
  <header>
    <div id="title">
      <h1>Caixa</h1>
    </div>


  </header>

  <!--<main>-->
  <div class="container">

    <div class="tudo_comanda">
      <div class="n_comanda">
      <form class="needs-validation" method="POST" novalidate>
        
          <div class="col">
            <label for="numcomanda" class="form-label">N° da Comanda</label>
              <div style="display:flex; ">
                <input type="number" class="form-control" id="numcomanda" placeholder="" name="comanda" required>
                <input type="submit" class="" name="btn_pesquisar" value="Pesquisar" style="width: 25%; margin:0px 8px"></input>
              </div>
            
          </div>

          
          
          <hr class="my-4">
          <div style="display:flex;width: 80%; position:absolute; bottom:20px;left: 80px">
            <input type="submit" name="encerrar" value="Fechar Comanda" class="sign-btn" />
            <div style="margin-left:5px;height: 50px;width: 50%;background-color: rgb(132, 14, 201);color: white;font-weight: bold;text-decoration:none !important; border-radius:20px;text-align: center;padding: 10px;">
              <a class="sign-btn" href="/configurarCardapio.php" >Voltar</a>
            </div>
          </div>
      </form>
    </div>

    <div class="produtos" style="width:100% ;">
      <div class="prod_consumido">
        <h4>
          <span class="texto">Produtos consumidos</span>
        </h4>
        <?php
        $totalProduto = 0;
    if(isset($query)){
        while ($row = mysqli_fetch_array($query)) { ?>
          <div class="produtocarrinho">
            <div class="informacoes">
                <h4><?php echo $row['nome'] ?></h4>
                <p>R$ <?php echo number_format($row['preco'], 2, ",", "."); ?></p>
              </div>
              <div class="descitem">
                <p>Quantidade:<?php echo $row['Qtd'] ?> </p>
              </div>
          </div>
      
        <?php
          $preco = $row['preco'];
          $quantidade = $row['Qtd'];
          $totalProduto += $preco * $quantidade;
        }; };?>
      </div>
      <div style="width:40%">
          <h3>Comanda de número: <?php if(isset($_POST['comanda'])){echo $_POST['comanda'];}else {} ?></h3>
          <h3>Total: R$ <?php echo number_format($totalProduto, 2, ",", "."); ?></h3>
      </div>
</div>
      </main>


</body>

</html>