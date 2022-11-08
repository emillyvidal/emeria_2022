<?php include_once("conexao.php"); ?>
<?php include_once('itensprodutoCardapio.php') ?>

<body class="body">
    <div class="tudo">
        <?php


        while ($dados2 = mysqli_fetch_array($query2)) {
        ?>
            <div class="item">
                <div class="img" name="imgProduto">
                    <img src="./imagens/<?= $dados2['img'] ?> " class="img img-responsive" width="200" height="100%" style="border-radius: 12px;">
                </div>

                <div class="info" name="info" style="height:100%;">
                    <h3><?php echo $dados2['nome'] ?></h3>
                    <p><?php echo $dados2['descricao'] ?></p>
                    <h4 class="preco">R$<?php echo number_format($dados2['preco'], 2, ",", ".");  ?></h4>
                </div>

                <a href="cardapio.php?#home?par=<?php echo $dados2['idProduto'] ?>">Adicionar ao Pedido</a>
            </div>

        <?php } ?>

    </div>

</body>

</html>