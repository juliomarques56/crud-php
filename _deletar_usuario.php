<?php 
    session_start();
    include 'conexao.php';

    $id = $_GET['id'];

    echo $sql = "DELETE FROM `usuarios` WHERE id_usuario = $id";
    $deletar = mysqli_query($conexao,$sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Usuário excluído com sucesso!</div>";
    header('Location:listar_usuarios.php');
?>