<?php 
    session_start();
    include 'conexao.php';

    $id = $_POST['id'];
    $codigoproduto = $_POST['codigoproduto'];
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    echo $sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";
    $atualizar = mysqli_query($conexao,$sql);

    $_SESSION['msg'] = "<div class='alert alert-success'>Produto atualizado com sucesso!</div>";
    header('Location:listar_produtos.php');
?>