<?php 
    include 'header.php';
    $id = $_GET['id'];
?>
    <div class="container"  style="width: 400px; margin-top: 40px;">
        <h4>Editar Fornecedor</h4>
        <form action="_atualizar.php" method="post">
            <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `fornecedor` WHERE id_fornecedor = $id"; 
                $buscar = mysqli_query($conexao,$sql);
                while ($array = mysqli_fetch_array($buscar)) {
                    $id_fornecedor = $array['id_fornecedor'];
                    $nome_fornecedor = $array['nome_fornecedor'];
                
            ?>
            <div class="form-group">
                <label>Fornecedor</label>
                <input type="text" name="fornecedor" class="form-control" value="<?php echo $nome_fornecedor ?>" placeholder="Digite o nome da categoria" autocomplete="off">
                <input type="text" name="id" class="form-control" value="<?php echo $id ?>" style="display:none">
            </div>
            <div style="text-align: right">
                <a href="listar_fornecedor.php" class="btn btn-sm btn-warning">Voltar</a>
                <button type="submit" name="updatefor" class="btn btn-sm btn-success">Confirmar</button>
            </div>
            <?php }?>
        </form>
    </div>
    
<?php 
    include 'footer.php';
?>