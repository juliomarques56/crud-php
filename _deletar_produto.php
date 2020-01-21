<?php 
    session_start();
    include 'conexao.php';

    $id = $_GET['id'];

    echo $sql = "DELETE FROM `produtos` WHERE id_produto = $id";
    $deletar = mysqli_query($conexao,$sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Produto excluído com sucesso!</div>";
    header('Location:listar_produtos.php');
?>