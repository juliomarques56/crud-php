<?php 
    session_start();
    include 'conexao.php';

    $id = $_GET['id'];

    echo $sql = "DELETE FROM `estoque` WHERE id_estoque = $id";
    $deletar = mysqli_query($conexao,$sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Produto excluído com sucesso!</div>";
    header('Location:listar_produtos.php');
?>