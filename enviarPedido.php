<?php 

include_once('conexao.php');
echo "veio";

            if (isset($_POST['enviar'])){
                $sqlCriarPedido = mysqli_query($conn, "INSERT INTO pedido(valorPedido) VALUES('$totalProduto')");

                $idpedido = mysqli_insert_id($conn);
                echo "oi lindo";

                foreach($_SESSION['venda'] as $ProdInsert => $Qtd){
                    echo $idpedido; 
                    echo $Qtd;
                    $sqlInsertItem = mysqli_query($conn, "INSERT INTO itenspedido(idPedido, idProduto, Qtd) VALUES('$idpedido', '$ProdInsert', '$Qtd')");

                }
            };
        ?>