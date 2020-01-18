<?php 
    session_start();
    include 'conexao.php';

    $id = $_GET['id'];
    $nivel = $_GET['nivel'];

    if ($nivel == 1) {
        $sql = "UPDATE `usuarios` SET status = 'Ativo', nivel_usuario = 1 WHERE id_usuario = $id";
        $atualizar = mysqli_query($conexao,$sql);
    
        $_SESSION['msg'] = "<div class='alert alert-success'>Usuário aprovado com sucesso!</div>";
        header('Location:aprovar_usuario.php'); 
    }
    if ($nivel == 2) {
        $sql = "UPDATE `usuarios` SET status = 'Ativo', nivel_usuario = 2 WHERE id_usuario = $id";
        $atualizar = mysqli_query($conexao,$sql);
    
        $_SESSION['msg'] = "<div class='alert alert-success'>Usuário aprovado com sucesso!</div>";
        header('Location:aprovar_usuario.php'); 
    }
    if ($nivel == 3) {
        $sql = "UPDATE `usuarios` SET status = 'Ativo', nivel_usuario = 3 WHERE id_usuario = $id";
        $atualizar = mysqli_query($conexao,$sql);
    
        $_SESSION['msg'] = "<div class='alert alert-success'>Usuário aprovado com sucesso!</div>";
        header('Location:aprovar_usuario.php'); 
    }
  
?>