<?php 
    include 'header.php';
?>
<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
    <h4>Lista de Fornecedor</h4>
    <?php 
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <table class="table ">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `fornecedor`";
                $buscar = mysqli_query($conexao,$sql);
                while ($array = mysqli_fetch_array($buscar)) {
                    $id_fornecedor = $array['id_fornecedor'];
                    $nome_fornecedor = $array['nome_fornecedor'];
                
            ?>
                <td><?php echo $id_fornecedor ?></td>
                <td><?php echo $nome_fornecedor ?></td>
                <td>
                    <?php 
                        if (($nivel == 1) || ($nivel == 2)) { 
                    ?>
                    <a class="btn btn-sm btn-warning" style="color:#fff" href="editar_fornecedor.php?id=<?php echo $id_fornecedor?>"><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <?php } ?>
                    <?php 
                        if ($nivel == 1) { 
                    ?>
                    <a class="btn btn-sm btn-danger" style="color:#fff" href="_excluir.php?delfor=<?php echo $id_fornecedor?>" data-confirm-for="Deseja excluir o Fornecedor?"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
    include 'footer.php'
?>