<?php
include_once('conexao.php');

    if(!empty($_GET['id'])){
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM produto WHERE idProduto='$id'";

        $result = $conn->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM produto WHERE idProduto='$id'";
            $resultDelete = mysqli_query($conn, $sqlDelete);
        }
    }
    header('Location: exibirProdutos.php');
   
?>