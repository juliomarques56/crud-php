<?php 
    session_start();
    include 'header.php';
?>
<div class="container" style="margin-top: 40px;">
    <h4>Usuários pendetes de aprovação</h4>
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
                <th scope="col">Nível</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tr>
            <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `usuarios` WHERE `status` = 'Inativo'";
                $buscar = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($buscar)) {
                    $id_usuario = $array['id_usuario'];
                    $nomeusuario = $array['nome_usuario'];
                    $emailusuario = $array['email_usuario'];
                    $nivel = $array['nivel_usuario'];
                    $status = $array['status'];
                
            ?>
                <td><?php echo $id_usuario ?></td>
                <td><?php echo $nomeusuario ?></td>
                <td><?php echo $emailusuario ?></td>
                <td><?php echo $nivel ?></td>
                <td>
                    <a class="btn btn-sm btn-success" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario?>&nivel=1"><i class="fas fa-check"></i>&nbsp;Administrador</a>
                    <a class="btn btn-sm btn-warning" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario?>&nivel=2"><i class="fas fa-check"></i>&nbsp;Funcionário</a>
                    <a class="btn btn-sm btn-dark" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario?>&nivel=3"><i class="fas fa-check"></i></i>&nbsp;Conferente</a>
                    <a class="btn btn-sm btn-danger" style="color:#fff" href="_deletar_usuario.php?id=<?php echo $id_usuario?>"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                </td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php
    include 'footer.php'
?>