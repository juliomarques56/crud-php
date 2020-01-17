<?php 
    session_start();
    include 'conexao.php';
    include 'src/script/password.php';

    $nomeusuario = $_POST['nomeusuario'];
    $email = $_POST['emailusuario'];
    $senha = $_POST['senhausuario'];
    $nivel = $_POST['nivelusuario'];
    $status = 'Ativo';

    $sql = "INSERT INTO `usuarios`(`nome_usuario`, `email_usuario`, `senha_usuario`, `nivel_usuario`, `status`) VALUES ('$nomeusuario','$email',sha1('$senha'),'$nivel','$status')";

    $inserir = mysqli_query($conexao,$sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Usuário cadastrado com sucesso!</div>";
    header('Location:cadastrar_usuario.php');
?>