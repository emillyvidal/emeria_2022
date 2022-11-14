<?php include_once("conexao.php");

include_once('itensprodutoCardapio.php');
//deletar itens do carrinho
if (isset($_GET['del'])) {
    //$del = $_GET['del'];
    unset($_SESSION['venda'][$_GET['del']]);
};




?>

<div class="float" style="background-color: #500b70; position: fixed; width: 120px; height: 120px; border-radius:50%; z-index:2; bottom: 8%; right: 5%">
    <a style=' font-size:50px; margin: 32px; color: white; text-decoration:none' class='fas fa-cart-plus' data-bs-toggle="offcanvas" data-bs-target="#navbarpedido" aria-controls="navbarpedido"></a>
</div>

<div class="abaPedido">
    <div class="offcanvas menu offcanvas-end  text-white bg-dark " tabindex="-1" id="navbarpedido" aria-labelledby="navbarpedido">
        <div class="offcanvas-header" style="background-color: #500b70; border-bottom: 2px solid #d9d9d9;">
            <h3 class="offcanvas-title" id="offcanvasExampleLabel">Pedido</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <?php
            foreach ($_SESSION['venda'] as $prod => $quantidade) {

                $sqlcarrinho = mysqli_query($conn, "SELECT * FROM  produto WHERE idProduto = '$prod'");
                $resassoc = mysqli_fetch_assoc($sqlcarrinho);
            ?>
                <div class="produtocarrinho" style="display:flex;">
                    <div class="img" name="imgProduto" style="width: 100px ;">
                        <img src="./imagens/<?= $resassoc['img'] ?> " class="img img-responsive" width="100px" height="100%" style="border-radius: 12px;">
                    </div>
                    <div class="descitem">
                        <h4><?php echo $resassoc['nome'] ?></h4>
                        <div style="display: flex; justify-content: space-evenly;">
                            <p><?php echo 'R$' . $resassoc['preco'] ?></p>
                            <p>Quantidade:<?php echo $quantidade ?> </p>
                        </div>
                    </div>
                    <a href="Cardapio.php?del=<?php echo $resassoc['idProduto'] ?>">X</a>
                </div>

            <?php
                $_GET['par'] == '0';
                //para incluir no banco
                if(isset($quantidade)){
                    $nomeProduto = "$resassoc[nome]";
                    $precoProduto = "$resassoc[preco]";
                    $quantidadeProduto = "$quantidade";
                    $data_hora = date('m-d-Y h:i:s a', time()); 

                    $sqlCarrinho2 = "INSERT INTO itempedido(nomeProduto, preco, quantidade) 
                            VALUES ('$nomeProduto','$precoProduto', '$quantidadeProduto')";
                    mysqli_query($conn, $sqlCarrinho2);
                    
                    
             
                    $totalProduto =+ $resassoc['preco'] * $quantidade;
                }; 
            
            
        }

            ?>

        </div>
        <div class="footer">
            <p>Total:</p>
            <h5><?php echo number_format($totalProduto, 2, ",", ".")?></h5>
            <a href="cardapio.php?click=1">Finalizar pedido</a>

        </div>
    </div>
</div>