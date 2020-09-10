<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <div class="container"  style="width: 400px; margin-top: 40px;">
        <h4>Cadastro de Usuário</h4>
        <?php 
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form action="_inserir.php" method="post">
            <div class="form-group">
                <label>Nome do Usuário</label>
                <input type="text" name="nomeusuario" class="form-control" placeholder="Nome" required>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="emailusuario" class="form-control" placeholder="E-mail" required>
            </div>
            <div class="form-group">
                <label>Senha do Usuário</label>
                <input id="txtSenha" name="senhausuario" type="password" class="form-control" placeholder="Senha" required>
            </div>
            <div class="form-group">
                <label>Repetir Senha</label>
                <input type="password" class="form-control" placeholder="Repetir senha" required oninput="validaSenha(this)">
                <small>Precisa ser igual a senha digirada acima</small>
            </div>
            <div style="text-align: right">
                <a href="index.php" class="btn btn-sm btn-warning">Voltar</a>
                <button type="submit" name="insertuserex" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
    

    <script>
        function validaSenha (input){ 
            if (input.value != document.getElementById('txtSenha').value) {
            input.setCustomValidity('Repita a senha corretamente');
          } else {
            input.setCustomValidity('');
          }
        } 
    </script>
</body>
</html>