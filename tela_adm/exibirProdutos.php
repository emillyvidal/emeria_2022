<?php
include_once('conexao.php');


$sqll = "SELECT * FROM produto";
$query = mysqli_query($conn, $sqll);
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
            font-family: "Lato", sans-serif;
        }

        body {
            background: linear-gradient(rgba(168, 167, 167, 0.8), rgb(144, 142, 145));
            background-position: center center;
            background-size: cover;
            background-position-y: 0px;
            background-repeat: no-repeat;
            width: 1024px;
            height: 600px;
            Text-transform: capitalize
        }

        header {
            width: 100%;
            }

        .texto {
            font-family: "Lato", sans-serif;
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
            align-items: center;
            margin: 0 auto;
            width: 600px;
        }

        .legend {
            border-bottom: 1px solid white;
            padding: 10px;
            text-align: center;
            background-color: rgb(79, 6, 94);
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
            background-color: rgb(79, 6, 94, 0.25);

        }

        .item {
            width: 80%;
            margin: 20px;
            padding-left: 8px;
            text-align: center;
            border-right: solid 1.5px #2b2a2a;
        }
    </style>
</head>

<body>

    <header style="height: 62px; width: 100%">
        <nav class="navbar-dark bg-dark" style="height: 62px; width: 100%">
          <div class="menu-content" style="height: 62px; width: 100%">
            <div class="logo">
            <h1 class="logo" style="color: white;">EMÉRIA</h1>
            </div>

            <div class="float" style=' margin:10px;'>
              <a class='fas fa-arrow-circle-left' style='font-size:36px; color: white; text-decoration:none' href='/configurarCardapio.php'></a>
            </div>
          </div>
        </nav>
    </header>

    <!-- tabela de listagem -->

    <div class="listagem" style=" margin-top: 2%;">
        <h5 class="legend">Produtos cadastrados:</h5>
        <table class='tabela'>

            <?php 
            while ($dados3 = mysqli_fetch_array($query)) { 
            $cat= $dados3['categoria'];
            $nomecat= "SELECT nomeCategoria FROM categoria WHERE idCategoria = $cat";
            
                ?>

                <tr>
                    <td class='item'><?php echo $dados3['nome'] ?></td>
                    <?php 
                    
                    ?>
                    <td class='item'><?php echo $nomecat?></td>
                    
                    <td colspan="2" class="text-end" style='padding: 2px;'>
                        <a class='btn btn-sm' href='editaCadastro.php?coduser=<?php echo $dados3['coduser'] ?>'>Editar</a>
                        <a class='btn btn-sm' href='#' onclick='confirmar("<?php echo $dados3['coduser'] ?>")'>Excluir</a>
                    </td>
                </tr>
            <?php } ?>

        </table>

    </div>

</body>

</html>