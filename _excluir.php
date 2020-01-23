<?php 
    session_start();
    include 'conexao.php';

    //Excluir usuário
    if (isset($_GET['deluser'])) {
        $id = $_GET['deluser'];

        $sql = "DELETE FROM `usuarios` WHERE id_usuario = $id";
        $deletar = mysqli_query($conexao,$sql);
    
        $_SESSION['msg'] = "<div class='alert alert-success'>Usuário excluído com sucesso!</div>";
        header('Location:listar_usuarios.php');
    }

    // Excluir produto
    if (isset($_GET['delprod'])) {
        $id = $_GET['delprod'];

        $sql = "DELETE FROM `produtos` WHERE id_produto = $id";
        $deletar = mysqli_query($conexao,$sql);
    
        $_SESSION['msg'] = "<div class='alert alert-success'>Produto excluído com sucesso!</div>";
        header('Location:listar_produtos.php');
    }

    // Excluir categoria
    if (isset($_GET['delcat'])) {
        $id = $_GET['delcat'];

        $sql = "DELETE FROM `categoria` WHERE id_categoria = $id";
        $deletar = mysqli_query($conexao,$sql);

        $_SESSION['msg'] = "<div class='alert alert-success'>Categoria excluída com sucesso!</div>";
        header('Location:listar_categoria.php');
    }

    // Excluir fornecedor
    if (isset($_GET['delfor'])) {
        $id = $_GET['delfor'];

        $sql = "DELETE FROM `fornecedor` WHERE id_fornecedor = $id";
        $deletar = mysqli_query($conexao,$sql);
    
        $_SESSION['msg'] = "<div class='alert alert-success'>Fornecedor excluído com sucesso!</div>";
        header('Location:listar_fornecedor.php');
    }
   
?>