<?php 
    include 'conexao.php';
    include 'header.php';
    $id = $_GET['id'];
?>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <h4>Editar de Produto</h4>
        <form action="_atualizar_produto.php" method="post">
            <?php 
                $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
                $buscar = mysqli_query($conexao,$sql);
                
                while ($array = mysqli_fetch_array($buscar)) {
                    $id_estoque = $array['id_estoque'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];
            ?>
            <div class="form-group">
                <label>Código Produto</label>
                <input type="number" name="codigoproduto" class="form-control" value="<?php echo $nroproduto?>" placeholder="Insira o número do produto" disabled>
                <input type="number" name="id" class="form-control" value="<?php echo $id?>" style="display:none">
            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" name="nomeproduto" class="form-control" value="<?php echo $nomeproduto?>" placeholder="Insira o nome do produto">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" value="<?php echo $categoria?>" name="categoria">
                  <option>Periférico</option>
                  <option>Hardware</option>
                  <option>Software</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" class="form-control" value="<?php echo $quantidade?>" placeholder="Insira a quantidade do produto">
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" value="<?php echo $fornecedor?>" name="fornecedor">
                  <option>Fornecedor A</option>
                  <option>Fornecedor B</option>
                  <option>Fornecedor C</option>
                </select>
            </div>
            <div style="text-align: right">
                <a href="listar_produtos.php" class="btn btn-sm btn-warning">Voltar</a>
                <button type="submit" class="btn btn-sm btn-success">Confirmar</button>
            </div>
            <?php }?>
        </form>
    </div>

<?php 
    include 'footer.php';
?>