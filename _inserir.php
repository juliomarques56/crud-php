<?php 
    session_start();
    include 'conexao.php';
    include 'src/script/password.php';

    // Inserir categoria
    if (isset($_POST['insertcat'])) {
        $categoria = $_POST['categoria'];

        if (empty($categoria)) {
            $_SESSION['msg'] = "<div class='alert alert-warning'>Preencha os campos</div>";
            header('Location:cadastrar_categoria.php');
        }else {
            $sql = "INSERT INTO `categoria`(`nome_categoria`) VALUES ('$categoria')";
        $inserir = mysqli_query($conexao, $sql);
    
        $_SESSION['msg'] = "<div class='alert alert-success'>Categoria cadastrada com sucesso!</div>";
        header('Location:cadastrar_categoria.php');
        }
        
    }

    // Inserir fornecedor
    if (isset($_POST['insertfor'])) {
        $fornecedor = $_POST['fornecedor'];

        if (empty($fornecedor)) {
            $_SESSION['msg'] = "<div class='alert alert-warning'>Preencha os campos</div>";
            header('Location:cadastrar_fornecedor.php');
        }else {
            $sql = "INSERT INTO `fornecedor`(`nome_fornecedor`) VALUES ('$fornecedor')";
        $inserir = mysqli_query($conexao, $sql);
    
        $_SESSION['msg'] = "<div class='alert alert-success'>Fornecedor cadastrado com sucesso!</div>";
        header('Location:cadastrar_fornecedor.php');
        }
        
    }

    // Inserir produto
    if (isset($_POST['insertprod'])) {
        $codigoproduto = $_POST['codigoproduto'];
        $nomeproduto = $_POST['nomeproduto'];
        $categoria = $_POST['categoria'];
        $quantidade = $_POST['quantidade'];
        $fornecedor = $_POST['fornecedor'];
    
        if (empty($codigoproduto) || empty($nomeproduto) || empty($categoria) || empty($quantidade) || empty($fornecedor)) {
            $_SESSION['msg'] = "<div class='alert alert-warning'>Preencha todos os campos</div>";
            header('Location:cadastrar_produtos.php');
        }else {
            $sql = "SELECT * FROM `produtos` WHERE `nroproduto` = '$codigoproduto'";
            $buscar = mysqli_query($conexao,$sql);
            $rows = mysqli_num_rows($buscar);

            if ($rows > 0) {
                $_SESSION['msg'] = "<div class='alert alert-warning'>Já existe um produto com esse codigo</div>";
                header('Location:cadastrar_produtos.php');
            }else {
                $sql = "INSERT INTO `produtos`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($codigoproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";
                $inserir = mysqli_query($conexao, $sql); 
    
                $_SESSION['msg'] = "<div class='alert alert-success'>Produto cadastrado com sucesso!</div>";
                header('Location:cadastrar_produtos.php');
            }
        }
        
    }

    // Inserir usuário externo
    if (isset($_POST['insertuserex'])) {
        $nomeusuario = $_POST['nomeusuario'];
        $email = $_POST['emailusuario'];
        $senha = $_POST['senhausuario'];
        $status = 'Inativo';
    
        if (empty($nomeusuario) || empty($email) || empty($senha)) {
            $_SESSION['msg'] = "<div class='alert alert-warning'>Preencha todos os campos</div>";
            header('Location:cadastrar_usuario_externo.php');
        }else {
            $sql = "SELECT * FROM `usuarios` WHERE `email_usuario` = '$email'";
            $buscar = mysqli_query($conexao,$sql);
            $rows = mysqli_num_rows($buscar);

            if ($rows > 0) {
                $_SESSION['msg'] = "<div class='alert alert-warning'>Email já esta sendo usando</div>";
                header('Location:cadastrar_usuario_externo.php');
            }else {
                $sql = "INSERT INTO `usuarios`(`nome_usuario`, `email_usuario`, `senha_usuario`, `nivel_usuario`, `status`) VALUES ('$nomeusuario','$email',sha1('$senha'),'$nivel','$status')";
    
                $inserir = mysqli_query($conexao,$sql);
            
                $_SESSION['msg'] = "<div class='alert alert-success'>Usuário cadastrado com sucesso!</div>";
                header('Location:cadastrar_usuario_externo.php');
            }
        } 
    }

    // Inserir usuário
    if (isset($_POST['insertuser'])) {
        $nomeusuario = $_POST['nomeusuario'];
        $email = $_POST['emailusuario'];
        $senha = $_POST['senhausuario'];
        $nivel = $_POST['nivelusuario'];
        $status = 'Ativo';
    
        if (empty($nomeusuario) || empty($email) || empty($senha) || empty($nivel)) {
            $_SESSION['msg'] = "<div class='alert alert-warning'>Preencha todos os campos</div>";
            header('Location:cadastrar_usuario.php');
        }else {
            $sql = "SELECT * FROM `usuarios` WHERE `email_usuario` = '$email'";
            $buscar = mysqli_query($conexao,$sql);
            $rows = mysqli_num_rows($buscar);

            if ($rows > 0) {
                $_SESSION['msg'] = "<div class='alert alert-warning'>Email já esta sendo usando</div>";
                header('Location:cadastrar_usuario.php');
            }else {
                $sql = "INSERT INTO `usuarios`(`nome_usuario`, `email_usuario`, `senha_usuario`, `nivel_usuario`, `status`) VALUES ('$nomeusuario','$email',sha1('$senha'),'$nivel','$status')";
    
                $inserir = mysqli_query($conexao,$sql);
            
                $_SESSION['msg'] = "<div class='alert alert-success'>Usuário cadastrado com sucesso!</div>";
                header('Location:cadastrar_usuario.php');
            }
        } 
    }
   
?>