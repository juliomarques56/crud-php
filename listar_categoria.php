<?php 
    session_start();
    include 'header.php';
?>
<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
    <h4>Lista de Categoria</h4>
    <?php 
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <table class="table ">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `categoria`";
                $buscar = mysqli_query($conexao,$sql);
                while ($array = mysqli_fetch_array($buscar)) {
                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];
                
            ?>
                <td><?php echo $nome_categoria ?></td>
                <td>
                    <a class="btn btn-sm btn-warning" style="color:#fff" href="editar_categoria.php?id=<?php echo $id_categoria?>"><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <a class="btn btn-sm btn-danger" style="color:#fff" href=""><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
    include 'footer.php'
?>