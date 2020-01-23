<?php 
    session_start();
    include 'conexao.php';

    if (isset($_POST['updatecat'])) {
        $id = $_POST['id'];
        $nome_categoria = $_POST['categoria'];
    
        $sql = "UPDATE `categoria` SET `nome_categoria`='$nome_categoria' WHERE id_categoria = $id";
        $atualizar = mysqli_query($conexao,$sql);
    
        $_SESSION['msg'] = "<div class='alert alert-success'>Categoria atualizada com sucesso!</div>";
        header('Location:listar_categoria.php');
    }

    // Atualizar fornecedor
    if (isset($_POST['updatefor'])) {
        $id = $_POST['id'];
        $nome_fornecedor = $_POST['fornecedor'];

        $sql = "UPDATE `fornecedor` SET `nome_fornecedor`='$nome_fornecedor' WHERE id_fornecedor = $id";
        $atualizar = mysqli_query($conexao,$sql);

        $_SESSION['msg'] = "<div class='alert alert-success'>Fornecedor atualizado com sucesso!</div>";
        header('Location:listar_fornecedor.php');
    }

    // Atualizar produto
    if (isset($_POST['updateprod'])) {
        $id = $_POST['id'];
        $codigoproduto = $_POST['codigoproduto'];
        $nomeproduto = $_POST['nomeproduto'];
        $categoria = $_POST['categoria'];
        $quantidade = $_POST['quantidade'];
        $fornecedor = $_POST['fornecedor'];
    
        echo $sql = "UPDATE `produtos` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE id_produto = $id";
        $atualizar = mysqli_query($conexao,$sql);
    
        $_SESSION['msg'] = "<div class='alert alert-success'>Produto atualizado com sucesso!</div>";
        header('Location:listar_produtos.php');
    }
    
    // Atualizar usuário
    if (isset($_POST['updateuser'])) {
        $id = $_POST['id'];
        $nomeusuario = $_POST['nomeusuario'];
        $emailusuario = $_POST['emailusuario'];
        $nivel = $_POST['nivelusuario'];
    
        echo $sql = "UPDATE `usuarios` SET `nome_usuario`='$nomeusuario',`email_usuario`='$emailusuario',`nivel_usuario`=$nivel WHERE id_usuario = $id";
        $atualizar = mysqli_query($conexao,$sql);
    
        $_SESSION['msg'] = "<div class='alert alert-success'>Usuário atualizado com sucesso!</div>";
        header('Location:listar_usuarios.php');
    }

?>