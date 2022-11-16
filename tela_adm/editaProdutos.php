<?php

include_once('conexao.php');
if (!empty($_GET['id'])) {

  $id = $_GET['id'];

  $sql = "SELECT * FROM produto WHERE idProduto=$id";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($produto_data = mysqli_fetch_assoc($result)) {
      $nome = $produto_data['nome'];
      $descricao = $produto_data['descricao'];
      $preco = $produto_data['preco'];
      $categoria = $produto_data['categoria'];
      $pic = $produto_data['img'];
    }
  } else {
    header('location:exibirProdutos.php');
  };
}else{
  header('location:exibirProdutos.php');
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/3df637a2f2.js" crossorigin="anonymous"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--<script src="/scripts/sidebarCardapio.js" defer></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <title>Formulário | Produto</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      color: white;
      font-family: "Lato", sans-serif;
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

    .menuu {
      background-color: rgb(79, 6, 94);
      color: white;
      border-color: rgb(79, 6, 94);
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

    .box {
      margin: 0 auto;
      width: 80%;
      height: 430px;
      margin-top: 2%;
      padding: 0;
      padding-top: 0px;
      border-radius: 12px;
      color: white;
      font-size: 25px
    }

    .div1 {
      width: 65%;
      height: 60%;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      align-items: stretch;
    }

    .div2 {
      width: 30%;
    }

    form {
      width: 100%;
      height: 100%;
    }

    fieldset {
      width: 100%;
      height: 100%;
      display: flex;
      flex-wrap: wrap;
      align-content: flex-start;
      justify-content: space-around;
      align-items: stretch;
      margin: 0 auto;
      flex-direction: row;
      align-content: space-between;
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 12px;
    }

    legend {
      color: white;
      border-bottom: 1px solid white;
      padding: 10px;
      text-align: center;
      font-size: 30px;
    }

    fieldset div {
      margin: 12px 5px;
      text-align: center;
    }

    .inputBox {
      position: relative;
    }

    .inputUser {
      background: none;
      border: none;
      border-bottom: 1px solid rgb(79 6 94);
      outline: none;
      color: white;
      font-size: 15px;
      width: 100%;
      letter-spacing: 2px;
      padding: 2px 2px;
    }

    .labelInput {
      position: absolute;
      top: 0px;
      left: 0px;
      pointer-events: none;
      transition: 0.5s;
    }

    .inputUser:focus~.labelInput,
    .inputUser:valid~.labelInput {
      top: -20px;
      font-size: 12px;
      color: rgb(79, 6, 94);
    }

    #update {
      width: 50%;
      padding: 10px;
      color: white;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      padding: 10px;
      border-radius: 15px;
      margin-bottom: 5%;
      border: 2px solid rgb(132, 14, 201);
      background-color: rgb(34, 34, 34);
    }

    #update:hover {
      background-image: linear-gradient(to left, #525158, #525158);
      color: white;
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

  <div class="box">
    <form action="saveeditProduto.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend><b>Editar Produto</b></legend>
        <div class="div1">
          <div class="inputBox">
            <input type="text" name="nome" id="nome" class="inputUser" required value="<?php echo $nome?>" />
            <label for="nome" class="labelInput">Nome do item</label>
          </div>

          <div class="inputBox">
            <input type="text" name="descricao" id="descricao" class="inputUser" required value="<?php echo $descricao?>"/>
            <label for="descricao" class="labelInput">Descrição</label>
          </div>

          <div class="inputBox">
            <input type="number" name="preco" id="preco" class="inputUser" required value="<?php echo $preco?>"/>
            <label for="preco" class="labelInput">Preço</label>
          </div>



          <div class="inputBox">
            <input type="file" name="pic" accept="image/*" class="form-control" value="<?php echo $pic?>">
          </div>

        </div>


        <div class="div2" style="margin-left: 20px; padding-top: 2%;">
          <p style="color:rgb(79, 6, 94); font-weight:bold; ">Categoria:</p>

          <?php

          $sqll = "SELECT * FROM categoria";
          $query = mysqli_query($conn, $sqll);

          while ($dados = mysqli_fetch_array($query)) { ?>

            <input type="radio" name="categoria" value="<?= $dados['idCategoria'] ?>" <?php echo($categoria == $dados['idCategoria']) ? 'checked' : '' ?> required />
            <label><?= $dados['nomeCategoria'] ?></label>
            <?php 
            //echo $dados['nomeCategoria']; ?>
            <br />

          <?php } ?>
        </div>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="update" id="update" />
      </fieldset>
    </form>

  </div>


  <hr>
  </div>
</body>

</html>