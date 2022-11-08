<?php
session_start();
include_once('conexao.php');

if (isset($_POST['submitlogin'])) {
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
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/4f1451ffa0.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="styles/login.css" rel="stylesheet">
    <title>Eméria Tela de Login</title>
</head>

<body>
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
                    <input type="submit" name="submitlogin" id="submitlogin" value="Entrar" />
                    <p>Bem-vindo ao Sistema Gerenciador de Comandas Eméria.</p>

    </div>
    </fieldset>
    </form>
    </div>
</body>

</html>