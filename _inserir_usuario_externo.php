<?php 
    session_start();
    include 'conexao.php';
    include 'src/script/password.php';

    $nomeusuario = $_POST['nomeusuario'];
    $email = $_POST['emailusuario'];
    $senha = $_POST['senhausuario'];
    $status = 'Inativo';

    $sql = "INSERT INTO `usuarios`(`nome_usuario`, `email_usuario`, `senha_usuario`, `status`) VALUES ('$nomeusuario','$email',sha1('$senha'),'$status')";

    $inserir = mysqli_query($conexao,$sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Usuário cadastrado com sucesso!</div>";
    header('Location:cadastrar_usuario_externo.php');
?>