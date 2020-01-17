<?php 
    session_start();
    include 'conexao.php';

    $id = $_POST['id'];
    $nome_categoria = $_POST['categoria'];

    $sql = "UPDATE `categoria` SET `nome_categoria`='$nome_categoria' WHERE id_categoria = $id";
    $atualizar = mysqli_query($conexao,$sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Categoria atualizada com sucesso!</div>";
    header('Location:listar_categoria.php');
?>