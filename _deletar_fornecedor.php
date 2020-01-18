<?php 
    session_start();
    include 'conexao.php';

    $id = $_GET['id'];

    echo $sql = "DELETE FROM `fornecedor` WHERE id_fornecedor = $id";
    $deletar = mysqli_query($conexao,$sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Fornecedor excluído com sucesso!</div>";
    header('Location:listar_fornecedor.php');
?>