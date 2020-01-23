<?php 
    include 'conexao.php';
    include 'header.php';
    $id = $_GET['id'];
?>
    <div class="container"  style="width: 400px; margin-top: 40px;">
        <h4>Editar Usuário</h4>
        <form action="_atualizar.php" method="post">
        <?php 
            $sql = "SELECT * FROM `usuarios` WHERE id_usuario = $id";
            $buscar = mysqli_query($conexao,$sql);
            
            while ($array = mysqli_fetch_array($buscar)) {
                $id_usuario = $array['id_usuario'];
                $nomeusuario = $array['nome_usuario'];
                $email = $array['email_usuario'];
                $nivel = $array['nivel_usuario'];
        ?>
            <div class="form-group">
                <label>Nome do Usuário</label>
                <input type="text" class="form-control" name="nomeusuario" value="<?php echo $nomeusuario?>" placeholder="Nome" autocomplete="off">
                <input type="text" class="form-control" name="id" value="<?php echo $id?>" style="display:none">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name="emailusuario" value="<?php echo $email?>" placeholder="E-mail" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Nível de Acesso</label>
                <select name="nivelusuario" class="form-control" value="<?php echo $nivel?>">
                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                    <option value="3">Conferente</option>
                </select>
            </div>
            <div style="text-align: right">
                <a href="listar_usuarios.php" class="btn btn-sm btn-warning">Voltar</a>
                <button type="submit" name="updateuser" class="btn btn-sm btn-success">Confirmar</button>
            </div>
        <?php }?>
        </form>
    </div>
    

<?php 
    include 'footer.php';
?>