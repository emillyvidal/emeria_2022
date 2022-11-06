<?php
session_start();
include_once('conexao.php');


$nomeUsuario=$_POST['login'];
$senhaUsuario=$_POST['senha'];
$sql = "select login,senha from administrador where login= '$nomeUsuario'and senha= '$senhaUsuario'";
mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) == 1) {
    //echo 'Usuário está cadastrado';
    $_SESSION['submit'] = TRUE;
    $_SESSION['login'] = $nomeUsuario;
    $_SESSION['senha'] = $senhaUsuario;
    header('location:configurarCardapio.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="styles/login.css" rel="stylesheet">
    <title>Eméria Tela de Login</title>
</head>

<body style="background-image: url(/img/background.jpg);">
    <div class="float-lg-left" style="width:50px">
        <a class='fas fa-arrow-circle-left' style='font-size:36px; margin-top: 15px; color: white; position: relative;' href='/index.php'></a>
    </div>

    <div class="box">
        <fieldset>
            <form name="formlogin" method="post">
                <legend>
                    <h2>Entrar</h2>
                    </h2>
                    <br />
                    <div class="inputBox">
                        <input type="inteiro" name="login" id="login" class="inputUser" required />
                        <label for="login" class="labelInput">Código</label>
                    </div>
                    <br />
                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required />
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                    <br />
                    <br /><br />
                    <input type="submit" name="submit" id="submit" value="Entrar" />
                    <p>Bem-vindo ao Sistema Gerenciador de Comandas Eméria.</p>

    </div>
    </fieldset>
    </form>
    </div>
</body>

</html>