<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/3df637a2f2.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--<script src="/scripts/sidebarCardapio.js" defer></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/styles/configurarCardapio.css">
  <title>Tela Principal - Eméria</title>
</head>

<body>
  <header style="height: 62px; width: 100%">
    <nav class="navbar-dark bg-dark" style="height: 62px; width: 100%">
      <div class="menu-content" style="height: 62px; width: 100%">
        <div class="logo">
          <h1 class="logo" style="color: white">EMÉRIA</h1>
        </div>

        <div class="float" style="margin:20px; ">
          <a style='font-size:36px; color:white' class='fas fa-sign-out-alt' href='/index.php'></a>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <div class="main-content">
      <h1 class="primary-text">Perfil Administrador</h1>
      <h2 class="second-text ">Selecione uma opção:</h2>
      <div class="redirecionar" style="color: white;">
        <a href="#" class="btn btn-1 btn-lg">Comanda</a>
        <div class="redirecionar-1">
        <a href="/tela_adm/formularioProduto.php" class="btn btn-2 btn-lg">Cadastrar Produtos</a>
        <a href="/tela_adm/formularioCategoria.php" class="btn btn-3 btn-lg">Cadastrar Categorias</a>
        <a href="/tela_adm/exibirProdutos.php" class="btn btn-4 btn-lg">Visualizar Produtos Cadastrados</a>
        </div>
      </div>
    </div>
  </main>
</body>

</html>