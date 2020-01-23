<?php 
    
    include 'header.php';
?>
<div class="container" style="margin-top: 40px;">
    <h4>Lista de Usuários</h4>
    <?php 
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Nível de acesso</th>
                <th scope="col">Status</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tr>
            <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `usuarios` WHERE `status` = 'Ativo'";
                $buscar = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($buscar)) {
                    $id_usuario = $array['id_usuario'];
                    $nomeusuario = $array['nome_usuario'];
                    $emailusuario = $array['email_usuario'];
                    $nivelusuario = $array['nivel_usuario'];
                    $status = $array['status'];
                
            ?>
                <td><?php echo $id_usuario ?></td>
                <td><?php echo $nomeusuario ?></td>
                <td><?php echo $emailusuario ?></td>
                <?php 
                    if ($nivelusuario == 1) {
                        
                ?>
                    <td>Administrador</td>
                <?php }?>
                <?php 
                    if ($nivelusuario == 2) {
                        
                ?>
                    <td>Funcionário</td>
                <?php }?>
                <?php 
                    if ($nivelusuario == 3) {
                        
                ?>
                    <td>Conferente</td>
                <?php }?>
                <td><?php echo $status ?></td>

                <td>
                    <?php 
                        if (($nivel == 1) || ($nivel == 2)) { 
                    ?>
                    <a class="btn btn-sm btn-warning" style="color:#fff" href="editar_usuario.php?id=<?php echo $id_usuario?> "><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <?php }?>
                    <?php 
                        if ($nivel == 1) { 
                    ?>
                    <a class="btn btn-sm btn-danger" style="color:#fff" data-confirm-user="Deseja excluir o usuário?" href="_excluir.php?deluser=<?php echo $id_usuario?>"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                    <?php }?>
                </td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php
    include 'footer.php'
?>