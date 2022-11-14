<?php include_once("conexao.php"); ?>
<?php session_start() ?>

<?php
/* listagem dos produtos */
if (isset($_GET['cod'])) {
    $cod = $_GET['cod'];
    $sql2 = "SELECT*FROM produto WHERE categoria = '$cod'";
    $query2 = mysqli_query($conn, $sql2);
} else {
    $sql2 = "SELECT*FROM produto";
    $query2 = mysqli_query($conn, $sql2);
};

/* abrir sessão */

if (isset($_SESSION['venda'])) {
} else {
    $_SESSION['venda'] = array();
};

if (isset($_GET['par'])) {
    if (isset($_SESSION['venda'][$_GET['par']])) {
        $_SESSION['venda'][$_GET['par']]++;
    } else {
        $_SESSION['venda'][$_GET['par']] = 1;
    }
    $produto = $_GET['par'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/4f1451ffa0.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Lato", sans-serif;
        }

        html {
            width: 1024px;
            height: 600px;

        }

        body .body {
            display: flex;
            margin-top: 80px;
        }

        .tudo {
            width: 100%;
            height: 100%;
            overflow-y: scroll;
        }

        .item {
            background-color: rgba(255, 255, 255, 0.2);
            display: flex;
            margin: 0 auto;
            width: 80%;
            margin-top: 8px;
            height: 30%;
            color: white;
            border-radius: 12px;
            padding: 5px;
        }

        .info {
            margin: none;
            padding: 8px;
            height: 100%;
            width: 100%;
        }

        h5 {
            text-transform: uppercase;
            margin-top: 0%;
        }

        .info .descricao{
            height: 80px;
            text-transform: capitalize;
            
        }

        .importantes{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: flex-start;
        }

        h4 .preco{
            margin:none;
            position:absolute;
            margin-top: 2px;
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

        .carousel-inner>.item>a>img,
        .carousel-inner>.item>img,
        .img-responsive,
        .thumbnail a>img,
        .thumbnail>img {
            display: block;
            max-width: 200px;
            height: auto;
        }

        .footer{
            display:flex; 
            justify-content: space-around;
            border-top: 1px solid rgba(255,255,255,0.4) !important;
            height: 10%;
        }
        .footer a{
            text-decoration: none;
            color: white;
            font-weight: bold;
            width: 50%;
            background-color: rgb(132, 14, 201);
            border-radius: 12px;
            align-self: center;
            text-align: center;
        }

        .footer p{
            width: 70%;
        }
    </style>
</head>



</html>