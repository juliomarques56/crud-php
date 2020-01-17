<?php 
    session_start();
    include 'conexao.php';

    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO `categoria`(`nome_categoria`) VALUES ('$categoria')";

    $inserir = mysqli_query($conexao, $sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Categoria cadastrada com sucesso!</div>";
    header('Location:cadastrar_categoria.php');
?>