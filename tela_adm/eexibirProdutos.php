<?php
include_once('conexao.php');


$sqll = "SELECT * FROM produto";
$query = mysqli_query($conn, $sqll);
$goquery = mysqli_fetch_array($query);

$categoria = $goquery['categoria'];
                echo $categoria; 
$querycategoria= mysqli_query($conn, "SELECT*FROM categoria WHERE idCategoria = $categoria");
$dado3 = mysqli_fetch_array($querycategoria);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Cadastrados</title>

    <script src="https://kit.fontawesome.com/3df637a2f2.js" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--<script src="/scripts/sidebarCardapio.js" defer></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            width: 1024px;
            height: 600px;
            color: white;
            font-family: poppinsregular;
        }

        body{
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
      border-bottom: 3px solid rgba(255,255,255,0.4);
        }
        #title{
        flex-direction: column;
        line-height: 10px;
        text-decoration: none;
        }

        #title a{
        text-decoration: none;
        }

        li{
            display: inline-block;
            margin: 20px;
        }

        a li{
            color: white;
        }

        a li:hover{
            color: rgb(132, 14, 201);
            transition: 0.3s all;
        }

        a h1{
            text-decoration: none;
            font-weight: 200;
            color: white;
        }

         #btnn{
            border: 2px solid rgb(132, 14, 201);
            padding: 10px;
            border-radius: 15px;
        }

        #btnn:hover{
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
            }

        .legend {
            border-bottom: 1px solid white;
            padding: 10px;
            text-align: center;
            color: rgb(79, 6, 94);
            font-size: 30px;
            margin: 0;
            margin-top: 0;
        }

        td {
            font-size: 15px;
            font-family: arial;
        }

        td .btn-sm {
            font-family: sans-serif;
        }

        table {
            width: 100%;

        }

        tr {
            font-size: 12px;
            border: solid 1.5px #2b2a2a;
            background-color: rgb(79, 6, 94, 0.7);

        }

        .item {
            width: 70%;
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
            <a href="\tela_adm\formularioCategoria.php"><li>Cadastrar Categorias</li></a>
            <a href="\tela_adm\formularioProduto.php"><li>Cadastrar Produtos</li></a>
            <a href="\tela_adm\exibirProdutos.php"><li>Visualizar Produtos</li></a>
            <a href="#" id="btnn"><li>Comanda</li></a>
        </ul>
</header>

    <!-- tabela de listagem -->

    <div class="listagem" style=" margin-top: 2%;">
        <h5 class="legend">Produtos cadastrados:</h5>
        <table class='tabela'>

            <?php 
            while ($dados3 = mysqli_fetch_array($query)) { 
            
                ?>
                <tr>
                    <td class='item'><?php echo $dados3['nome'] ?></td>

                  <td class='item'>
                    <?php echo $dado3['nomeCategoria']?>
                </td> 
                    
                    <td colspan="2" class="text-end" style='padding: 2px;'>
                        <a class='btn btn-sm' href='editaCadastro.php?coduser=<?php echo $dados3['coduser'] ?>'>Editar</a>
                        <a class='btn btn-sm' href='#' onclick='confirmar("<?php echo $dados3['coduser'] ?>")'>Excluir</a>
                    </td>
                </tr>
            <?php } ?>

        </table>

    </div>
    <hr>
</body>

</html>