<?php
  include_once('conexao.php');
    
    $sqlitenspedido= "SELECT * FROM itenspedido"; 
    $queryitenspedido = mysqli_query($conn, $sqlitenspedido);
        while($arrayitenspedido = mysqli_fetch_array($queryitenspedido)){

            $sqlproduto = "SELECT * FROM produto where idProduto = '$arrayitenspedido[idProduto]'";
            $queryproduto = mysqli_query($conn, $sqlproduto);

            $sqlcomanda = "SELECT * FROM pedido WHERE idPedido = '$arrayitenspedido[idPedido]'";
            $querycomanda = mysqli_query($conn, $sqlcomanda);
            $arraycomanda = mysqli_fetch_array($querycomanda);
        };

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/4f1451ffa0.js" crossorigin="anonymous"></script>
    <title>Cozinha</title>

    <style>
        table{
            width: 800px;
            height: 500px;
            margin: 0 auto;
            border: 3px solid black;
        }
        thead{
            background-color: #500b70;
            color: white;
        }

    </style>
</head>
<body>
    <div> 
        <!-- tabela de listagem -->

      <div class="listagem" style=" margin-top: 2%;">
        <h5 >Pedidos recebidos:</h5>
        <table class='tabela'>
            <thead>
            <td>Produto:</td>
            <td>Quantidade:</td>
            <td>Mesa:</td>
          <tbody style="overflow-y: scroll; height:182.5px; ">

          <?php while ($dados = mysqli_fetch_array($queryproduto)) { ?>
            <tr>
              <td class='item text-start'><?php echo $dados['2'] ?></td>
              <td class='item text-start'><?php echo $arrayitenspedido['Qtd'] ?></td>
              <td class='item text-start'><?php echo $arraycomanda['idComanda'] ?></td>


              
            </tr>
          <?php } ?>
          </tbody>
        </table>

      </div>
    </div>
</body>
</html>