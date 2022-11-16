<?php
include_once('conexao.php');


$sqll = "SELECT * FROM produto";
$query = mysqli_query($conn, $sqll);
//mudei o comando de fetch_array pra fetch_all, assim ele busca todos os registros
$dados3 = mysqli_fetch_all($query);
$querycategoria = mysqli_query($conn, "SELECT * FROM categoria");
$dado3 = mysqli_fetch_all($querycategoria);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Cadastrados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/4f1451ffa0.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>


    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            color: white;
            font-family: poppinsregular;
        }

        body {
            background-color: rgb(34, 34, 34);
            color: white;
            font-family: poppinsregular;
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px;
        }

        header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            border-bottom: 3px solid rgba(255, 255, 255, 0.4);
            height: 100px;
        }

        #title {
            flex-direction: column;
            line-height: 10px;
            text-decoration: none;
            height: 100px;
        }

        #title a {
            text-decoration: none;
        }

        li {
            display: inline-block;
            margin: 20px;
        }

        a li {
            color: white;
        }

        a li:hover {
            color: rgb(132, 14, 201);
            transition: 0.3s all;
        }

        a h1 {
            text-decoration: none;
            font-weight: 200;
            color: white;
        }

        #btnn {
            border: 2px solid rgb(132, 14, 201);
            padding: 10px;
            border-radius: 15px;
        }

        #btnn:hover {
            background-color: rgb(132, 14, 201);
            color: white;
        }

        .texto {
            font-family: poppinsregular;
            font-size: small;
        }

        .menu-content {
            text-transform: uppercase;
            height: 100%;
            display: flex;
            align-items: center;
            font-size: 1.8rem;
            flex-direction: row-reverse;
            justify-content: flex-end;
        }

        .logo {
            font-size: 30px;
            letter-spacing: 0.4rem;
            cursor: pointer;
        }

        .listagem {
            margin: 0 auto;
            width: 80%;
            height: 430px;
            margin-top: 2%;
            padding: 0;
            padding-top: 0px;
            border-radius: 12px;
            color: white;
            font-size: 25px;
            background-color: rgba(255, 255, 255, 0.2);
            overflow-y: scroll;
        }

        .legend {
            border-bottom: 1px solid white;
            padding: 10px;
            text-align: center;
            color: rgb(79, 6, 94);
            font-size: 35px;
            margin: 0;
            margin-top: 0;
        }

        td {
            font-size: 18px;
            font-family: arial;
        }

        td a {
            text-decoration: none;
            color: #dc3545;
            font-family: sans-serif;
            padding: 2px;
        }

        table {
            width: 100%;

        }

        tr {
            font-size: 12px;
            border: solid 1.5px #2b2a2a;
            background-color: rgb(79, 6, 94, 0.7);
            text-transform: inherit;
            height: 60px;
            font-size: 20px;
        }

        .item {
            width: 40%;
            margin: 20px;
            padding-left: 8px;
            text-align: center;
            border-right: solid 1.5px #2b2a2a;
        }
    </style>
</head>

<body>

    <header>
        <div id="title"><a href="/configurarCardapio.php">
                <h1>Perfil</h1>
                <h1>Administrador</h1>
            </a>
        </div>

        <ul>
            <a href="\tela_adm\formularioCategoria.php">
                <li>Cadastrar Categorias</li>
            </a>
            <a href="\tela_adm\formularioProduto.php">
                <li>Cadastrar Produtos</li>
            </a>
            <a href="\tela_adm\exibirProdutos.php">
                <li>Visualizar Produtos</li>
            </a>
            <a href="#" id="btnn">
                <li>Comanda</li>
            </a>
        </ul>
    </header>

    <!-- tabela de listagem -->

    <div class="listagem" style=" margin-top: 2%;">
        <h5 class="legend">Produtos cadastrados:</h5>
        <table class='tabela'>

            <?php
            //laço foreach pra ele passar por todos os produtos
            foreach ($dados3 as $dado) {

            ?>
                <tr>

                    <td class='item'><?php echo $dado[2] ?></td>

                    <td class='item'>
                        <!-- laço foreach pra ele comparar e descobrir qual a categoria -->
                        <?php
                        foreach ($dado3 as $dad) {
                            //print_r($dado[1]);
                            if ($dad[0] == $dado[1]) {
                                echo $dad[1];
                                break;
                            }
                        } ?>
                    </td>

                    <td colspan="2" class="text-center">
                        <a class='fas fa-edit btn btn-primary' href='editaProdutos.php?id=<?php echo $dado[0] ?>' title="editar"></a>
                        <a class='fas fa-trash btn btn-danger' href='excluiProdutos.php?id=<?php echo $dado[0] ?>' title="deletar"></a>
                    </td>
                </tr>
            <?php }
            ?>

        </table>

    </div>
    <hr>
</body>

</html>