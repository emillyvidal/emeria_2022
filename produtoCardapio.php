<?php include_once("conexao.php"); ?>
<?php include_once('itensprodutoCardapio.php') ?>

<body class="body">
    <div class="tudo">
        <?php


        while ($dados2 = mysqli_fetch_array($query2)) {
        ?>
            <div class="item">
                <div class="img" name="imgProduto" height= 100% style="align-self: center;">
                    <img src="./imagens/<?= $dados2['img'] ?> " class="img img-responsive" width="200" height="100%" style="border-radius: 12px; margin: auto 0;">
                </div>

                <div class="info" name="info" style="height:100%;">
                    <h5><?php echo $dados2['nome'] ?></h5>
                    <p class="descricao" style="margin-bottom:0px;"><?php echo $dados2['descricao'] ?></p>


                    <div class="importantes"> 
                        <h4 class="preco">R$<?php echo number_format($dados2['preco'], 2, ",", ".");  ?></h4>
                    
                        <a class="btn-carrinho"href="cardapio.php?par=<?php echo $dados2['idProduto'] ?>">Adicionar ao Pedido</a>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>

</body>

</html>