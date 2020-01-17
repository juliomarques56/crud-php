<?php 
    session_start();
    include 'conexao.php';

    $codigoproduto = $_POST['codigoproduto'];
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    $sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($codigoproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";
    $inserir = mysqli_query($conexao, $sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Produto cadastrado com sucesso!</div>";
    header('Location:cadastrar_produtos.php');
?>