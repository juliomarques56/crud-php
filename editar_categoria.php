<?php 
    include 'header.php';
    $id = $_GET['id'];
?>
    <div class="container"  style="width: 400px; margin-top: 40px;">
        <h4>Editar Categoria</h4>
        <form action="_atualizar.php" method="post">
            <?php 
                include 'conexao.php';
                $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id"; 
                $buscar = mysqli_query($conexao,$sql);
                while ($array = mysqli_fetch_array($buscar)) {
                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];
                
            ?>
            <div class="form-group">
                <label>Categoria</label>
                <input type="text" name="categoria" class="form-control" value="<?php echo $nome_categoria ?>" placeholder="Digite o nome da categoria" autocomplete="off">
                <input type="text" name="id" class="form-control" value="<?php echo $id ?>" style="display:none">
            </div>
            <div style="text-align: right">
                <a href="listar_categoria.php" class="btn btn-sm btn-warning">Voltar</a>
                <button type="submit" name="updatecat" class="btn btn-sm btn-success">Confirmar</button>
            </div>
            <?php }?>
        </form>
    </div>
    
<?php 
    include 'footer.php';
?>