<?php  
    include_once ('conexao.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $categoria = $_POST['categoria'];

        $sqlInsert = "UPDATE produto 
        SET nome='$nome', descricao='$descricao', preco='$preco', categoria='$categoria'
        WHERE idProduto='$id'";

        $resultUpdate = $conn->query($sqlInsert);
        print_r($resultUpdate);

    }
    header('location:exibirProdutos.php')
?>