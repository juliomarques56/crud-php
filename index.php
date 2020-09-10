<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Web</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">
    <style>
        #index{
            width: 350px;
            -webkit-box-shadow: 10px 6px 26px -13px rgba(43,42,54,1);
            -moz-box-shadow: 10px 6px 26px -13px rgba(43,42,54,1);
            box-shadow: 10px 6px 26px -13px rgba(43,42,54,1);
        }    
    </style>
</head>
<body>
    <div class="container border rounded p-3" id="index"  style="margin-top: 100px;">
        <center>
            <img src="assets/img/cadeado.png" style="width: 125px;">
        </center>
        <div>
            <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }

              


            ?>
          <script>(function() {
    console.log(5); 
    setTimeout(function(){console.log(6)}, 10); 
    setTimeout(function(){console.log(7)}, 0); 
    console.log(8);
})();</script>
            
        </div>
        <form action="validar_acesso.php" method="post">

            <div class="form-group">
                <label>Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" >
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" >
            </div>
            <button type="submit" class="btn btn-lg btn-success w-100">Acessar</button>
        </form>
        
    </div>
    <center>
        <small>Você não possui cadastro? Clique <a href="cadastrar_usuario_externo.php">aqui</a></small>
    </center>

</body>
</html>