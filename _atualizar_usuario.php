<?php 
    session_start();
    include 'conexao.php';

    $id = $_POST['id'];
    $nomeusuario = $_POST['nomeusuario'];
    $emailusuario = $_POST['emailusuario'];
    $nivel = $_POST['nivelusuario'];

    echo $sql = "UPDATE `usuarios` SET `nome_usuario`='$nomeusuario',`email_usuario`='$emailusuario',`nivel_usuario`=$nivel WHERE id_usuario = $id";
    $atualizar = mysqli_query($conexao,$sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Usuário atualizado com sucesso!</div>";
    header('Location:listar_usuarios.php');
?>