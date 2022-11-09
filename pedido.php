<?php include_once("conexao.php");

include_once('itensprodutoCardapio.php');
//deletar itens do carrinho
if (isset($_GET['del'])) {
    //$del = $_GET['del'];
    unset($_SESSION['venda'][$_GET['del']]);
};

if(isset($_GET['click'])){
    $carrinho = $_SESSION['venda'];
    $hoje = date('Y/m/d');
    $hoje = str_replace('/','-',$hoje);
    session_destroy();

    
    if (isset($carrinho)) {
        mysqli_query($conn, "INSERT INTO pedido ($hoje)");
        $id = mysqli_insert_id($conn);
        print_r($id);
        
    }
}


    
?>

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
                        <p><?php echo 'R$' . $resassoc['preco'] ?></p>
                    </div>
                    <p><?php echo $quantidade ?> </p>
                    <a href="Cardapio.php?del=<?php echo $resassoc['idProduto'] ?>">X</a>
                </div>
            <?php }

            ?>

        </div>
        <div class="footer" style="display:flex">
            <p>Total:</p>
            <a href="cardapio.php?click=1">Finalizar pedido</a>

        </div>
    </div>
</div>