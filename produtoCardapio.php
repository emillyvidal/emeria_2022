<?php include_once('conexao.php'); ?>
<?php session_start();
session_destroy(); ?>
<?php
/* listagem dos produtos */
$cod = $_GET['cod'];

$sql2 = "SELECT * FROM produto WHERE categoria = $cod";
$query2 = mysqli_query($conn, $sql2);


/* abrir sessão */

if (isset($_SESSION['venda'])) {
} else {
    $_SESSION['venda'] = array();
}

if (isset($_GET['par'])) {
    $produto = $_GET['par'];
    $_SESSION['venda'][$produto] = 1;
}

if (isset($_GET['del'])) {
    $del = $_GET['del'];
    unset($_SESSION['venda']['$del']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        * {
            color: black;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Lato", sans-serif;
        }

        html {
            width: 1024px;
            height: 600px;
            background-color: #D9D9D9;

        }

        .body {
            display: flex;
            margin-top: 80px;
        }

        .item {
            background-color: white;
            display: flex;
            margin: 0 auto;
            width: 80%;
            margin-top: 8px;
        }

        .info {
            margin: 8px;

        }

        h3 {
            text-transform: uppercase;
            margin-top: 0%;
        }

        p {
            word-wrap: normal;
            width: 95%;
            text-transform: capitalize;
        }

        form {
            display: flex;
            align-content: center;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: flex-end;
            align-items: center;
        }

        .quantidade {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }
    </style>
</head>

<body class="body">
    <?php
    while ($dados2 = mysqli_fetch_array($query2)) {
    ?>
        <div class="item">
            <div class="img" name="imgProduto">
                <img src="./imagens/<?= $dados2['img'] ?> " class="img img-responsive" width="200" height="180">
            </div>

            <div class="info" name="info">
                <h3><?php echo $dados2['nome'] ?></h3>
                <p><?php echo $dados2['descricao'] ?></p>
                <h4 class="preco">R$<?php echo number_format($dados2['preco'], 2, ",", ".");  ?></h4>
            </div>
            <a href="produtoCardapio.php?par=<?php echo $dados2['idProduto'] ?>">Adicionar Carrinho</a>
        </div>

    <?php } ?>

    <?php
    foreach ($_SESSION['venda'] as $prod => $quantidade) {
        $sqlCarrinho = mysqli_query($conn, "SELECT * FROM produto WHERE idProduto = $prod");
        $resAssoc = mysqli_fetch_assoc($sqlCarrinho);
    ?>
        <div class="produtocarrinho">
            <h3> oi<?php echo $dados2['nome'] ?></h3>
            <p>aham<?php echo 'R$' . $dados2['preco'] ?></p>
            <p> isso<?php echo $quantidade ?> </p>
            <a href="produtoCardapio.php?del=<?php echo $resAssoc['idProduto'] ?>">X</a>
        </div>
    <?php } ?>

</body>

</html>