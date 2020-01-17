<?php 
    session_start();
    include 'header.php';
?>
<div class="container" style="margin-top: 40px;">
    <h4>Lista de Produtos</h4>
    <?php 
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Cod Produto</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tr>
            <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `estoque`";
                $buscar = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($buscar)) {
                    $id_estoque = $array['id_estoque'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];
                
            ?>
                <td><?php echo $nroproduto ?></td>
                <td><?php echo $nomeproduto ?></td>
                <td><?php echo $categoria ?></td>
                <td><?php echo $quantidade ?></td>
                <td><?php echo $fornecedor ?></td>

                <td>
                    <a class="btn btn-sm btn-warning" style="color:#fff" href="editar_produto.php?id=<?php echo $id_estoque?>"><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <a class="btn btn-sm btn-danger" style="color:#fff" href=""><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                </td>
        </tr>
        <?php } ?>
    </table>
</div>

<?php
    include 'footer.php'
?>