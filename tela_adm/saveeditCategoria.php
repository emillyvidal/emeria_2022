<?php  
    include_once ('conexao.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nomeCategoria = $_POST['nomeCategoria'];

        $sqlInsert = "UPDATE categoria 
        SET nomeCategoria='$nomeCategoria'
        WHERE idCategoria='$id'";

        $resultUpdate = $conn->query($sqlInsert);
        print_r($resultUpdate);

    }
    header('location:formularioCategoria.php')
?>