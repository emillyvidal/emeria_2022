<?php
session_start();
include_once('conexao.php');

if (isset($_POST['submitlogin'])) {
  $nomeUsuario = $_POST['login'];
  $senhaUsuario = $_POST['senha'];
  $sql = "select login,senha from administrador where login= '$nomeUsuario'and senha= '$senhaUsuario'";
  mysqli_query($conn, $sql);

  if (mysqli_affected_rows($conn) == 1) {
    //echo 'Usuário está cadastrado';
    $_SESSION['submit'] = TRUE;
    $_SESSION['login'] = $nomeUsuario;
    $_SESSION['senha'] = $senhaUsuario;
    switch ($nomeUsuario) {
      case '565568':
        $_SESSION['idConta'] = '1';
        header('location:configurarCardapio.php');
        break;
      case '1234':
        $_SESSION['idConta'] = '2';
        header('location:cozinha.php');
    }
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eméria - Login</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/4f1451ffa0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/style2.css" />
</head>

<body>



  <div class="box ">
    <div class="float" style="position: relative; width: 75px; height: 75px; z-index:1;">
      <a style=' font-size:40px; margin: 20px; color: #9f09e5; text-decoration:none' class='fas fa-arrow-circle-left' href='/cardapio.php'></a>
    </div>
    <div class="inner-box">

      <div class="forms-wrap">
        <div style="align-self: center;text-align: center;">
          <div class="logo">
            <img src="/imagens/logo.png" />
            <br />
          </div>

          <div class="heading">
            <h2>Bem-Vindo(a)</h2>
            <h6>Sistema Gerenciador de Comandas</h6>
          </div>

        </div>


      </div>

      <div class="carousel">
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

        </form>
      </div>
    </div>
  </div>


</body>

<script>
  function logar() {

    var codigo = document.getElementById('codigo').value;
    var senha = document.getElementById('senha').value;

    if (login == "administrador" && senha == "administrador") {
      alert('Sucesso');
      location.href = "index.html";
    } else {
      alert('Codigo ou senha incorretos');
    }

  }
</script>

<script src="C:\Users\Cliente\Downloads\javascript-sliding-login-and-registration-form-main\app.js"></script>

</html>