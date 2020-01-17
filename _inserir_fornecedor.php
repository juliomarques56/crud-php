<?php 
    session_start();
    include 'conexao.php';

    $fornecedor = $_POST['fornecedor'];

    $sql = "INSERT INTO `fornecedor`(`nome_fornecedor`) VALUES ('$fornecedor')";

    $inserir = mysqli_query($conexao, $sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Fornecedor cadastrado com sucesso!</div>";
    header('Location:cadastrar_fornecedor.php');
?>