<?php 
    session_start();
    include 'conexao.php';

 

    if (empty($_POST['usuario']) || empty($_POST['senha'])) {
        
        $_SESSION['msg'] = "<div class='alert alert-success'>Preencha todos os campos</div>";
        header('Location:index.php');
        exit();

    }else{
        $usuario = $_POST['usuario'];
        $senhausuario = $_POST['senha'];

        $sql = "SELECT email_usuario, senha_usuario FROM `usuarios` WHERE email_usuario = '$usuario'";
        $buscar = mysqli_query($conexao,$sql);
        $rows = mysqli_num_rows($buscar);
    
        if ($rows > 0) {
            $array = mysqli_fetch_array($buscar);
            $senha = $array['senha_usuario'];
            $senhadecodificada = sha1($senhausuario);

            if ($senha == $senhadecodificada) {
                $_SESSION['usuario'] = $usuario;
                header('Location:menu.php');
            }else{
                $_SESSION['msg'] = "<div class='alert alert-success'>Senha incorreta!</div>";
                header('Location:index.php');
            }
            
        }else{
            $_SESSION['msg'] = "<div class='alert alert-success'>Usuário não cadastrado!</div>";
            header('Location:index.php');
        }
    }
 
?>  