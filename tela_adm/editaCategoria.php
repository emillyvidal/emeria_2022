<?php
include_once('conexao.php');


$sqll = "SELECT * FROM categoria";
$query = mysqli_query($conn, $sqll);
?>


<?php

include_once('conexao.php');
if (!empty($_GET['id'])) {

  $id = $_GET['id'];

  $sql = "SELECT * FROM categoria WHERE idCategoria=$id";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($categoria_data = mysqli_fetch_assoc($result)) {
      $nomeCategoria = $categoria_data['nomeCategoria'];
    }
  } else {
    header('location:formularioCategoria.php');
  };
}else{
  header('location:formularioCategoria.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/4f1451ffa0.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <link href="styles\adm\style.css" rel="stylesheet">
  <link href="styles\adm\fonts.css" rel="stylesheet">
  <link href="styles\adm\media.css" rel="stylesheet">

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
      height: 100px;
    }
    #title{
    flex-direction: column;
    line-height: 10px;
    text-decoration: none;
    height: 100px;
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

    form {
      margin: 0 auto;
      width: 100%;
      height: 10%; 
      text-align: center;
      margin-top: 20px;

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
      padding-bottom: 25px;
    }

    legend {
      color: white;
      border-bottom: 1px solid white;
      padding: 10px;
      text-align: center;
      font-size: 30px;
    }

    fieldset div {
      margin: 5px;
      text-align: center;

    }
    

    .inputBox {
      position: relative;
    }

    .inputUser {
      background: none;
      border: none;
      border-bottom: 1px solid white;
      outline: none;
      color: white;
      font-size: 15px;
      width: 500px;
      letter-spacing: 2px;
      padding: 2px 2px;
    }

    td {
      font-size: 15px;
      font-family: arial;
      text-transform: uppercase;
    }

    td .btn-sm{
      font-family: sans-serif;
      color: #dc3545;
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
      background-color: rgb(79, 6, 94);
      border: none;
      padding: 5px;
      padding-left: 8px;
      color: black;
      font-weight: bold;
      cursor: pointer;
      border-radius: 10px;
      font-size: 18px;
    }

    #update:hover {
      background-image: linear-gradient(to left, #525158, #525158);
      color: white;
    }

    .listagem {
      align-items: center;
      margin: 0 auto;
      width:600px;
    }

    table{
      width:100%;
     border-radius: 12px; 
    }
    tbody{
      border-radius: 12px;
      border-bottom-left-radius: 12px;
      border-bottom-right-radius: 12px;
    }
    tr {
            font-size: 12px;
            border: solid 1.5px #2b2a2a;
            background-color: rgb(79, 6, 94, 0.7);

        }

    .item {
      width: 220px;
      margin: 20px;
      padding-left: 8px;
    }

    .listagem h5{
      color: rgba(255,255,255,0.5);
      font-weight: bold;
      font-size: 25px;
      background-color: #2b2a2a;
      border-bottom: 1px solid white;
      margin-bottom: 0px;
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      
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

  <div class="box">

    <fieldset>
      <legend><b>Cadastro de Categorias</b></legend>

      <form action="saveeditCategoria.php" method="POST">
        <div class="inputs" style="display:inline-flex;">
          <div class="inputBox">
            <input type="text" name="nomeCategoria" id="nomeCategoria" class="inputUser" required value="<?php echo $nomeCategoria ?>"/>
            <label for="nomeCategoria" class="labelInput">Adicione uma nova Categoria</label>
          </div>
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="inputBox">
            <button type="submit" name="update" id="update">
              <span class="fas fa-chevron-right" style="font-size: 22px; width:28px"></span>
            </button>
          </div>

      </form>

      </div>

      <!-- tabela de listagem -->

      <div class="listagem" style=" margin-top: 2%;">
        <h5 >Categoria:</h5>
        <table class='tabela'>
          <tbody style="overflow-y: scroll; height:182.5px; ">

          <?php while ($dados = mysqli_fetch_array($query)) { ?>
            <tr>
              <td class='item text-start'><?php echo $dados['nomeCategoria'] ?></td>

              <td colspan="2" class="text-end" style="padding-right: 10px;">
                <a class='fas fa-edit btn btn-primary' href='editaCategoria.php?id=<?php echo $dados['idCategoria'] ?>' title="editar"></a>
                <a class='fas fa-trash btn btn-danger' href='excluiCategoria.php?id=<?php echo $dados['idCategoria'] ?>' title="deletar"></a>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>

      </div>
  </fieldset>

  </div>

  <script>
    function confirmar(cod) {
      if (confirm('Você realmente deseja excluir esta linha?'))
        location.href = 'excluiUsuario.php?coduser=' + cod;
    }
  </script>
   <hr>
</body>

</html>