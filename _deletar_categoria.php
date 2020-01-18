<?php 
    session_start();
    include 'conexao.php';

    $id = $_GET['id'];

    echo $sql = "DELETE FROM `categoria` WHERE id_categoria = $id";
    $deletar = mysqli_query($conexao,$sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Categoria excluída com sucesso!</div>";
    header('Location:listar_categoria.php');
?>