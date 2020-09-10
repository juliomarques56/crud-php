<?php 
    include 'header.php';
?>
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
                <input type="text" class="form-control" name="nomeusuario" placeholder="Nome" required>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name="emailusuario" placeholder="E-mail" required>
            </div>
            <div class="form-group">
                <label>Senha do Usuário</label>
                <input id="txtSenha" type="password" class="form-control" name="senhausuario" placeholder="Senha" required>
            </div>
            <div class="form-group">
                <label>Repetir Senha</label>
                <input type="password" class="form-control" placeholder="Repetir senha" required oninput="validaSenha(this)">
                <small>Precisa ser igual a senha digirada acima</small>
            </div>
            <div class="form-group">
                <label>Nível de Acesso</label>
                <select name="nivelusuario" class="form-control" required>
                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                    <option value="3">Conferente</option>
                </select>
            </div>
            <div style="text-align: right">
                <button type="submit" name="insertuser" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
    

<?php 
    include 'footer.php';
?>