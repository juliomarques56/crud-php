<?php 
    session_start();
    include 'conexao.php';

    $id = $_POST['id'];
    $nome_fornecedor = $_POST['fornecedor'];

    $sql = "UPDATE `fornecedor` SET `nome_fornecedor`='$nome_fornecedor' WHERE id_fornecedor = $id";
    $atualizar = mysqli_query($conexao,$sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Fornecedor atualizado com sucesso!</div>";
    header('Location:listar_fornecedor.php');
?>