<?php 
    include 'header.php';
?>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <h4>Cadastro de Produto</h4>
        <?php 
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form action="_inserir.php" method="post">
            <div class="form-group">
                <label>Código Produto</label>
                <input type="number" name="codigoproduto" class="form-control" placeholder="Insira o número do produto" required>
            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" name="nomeproduto" class="form-control" placeholder="Insira o nome do produto" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria" required>
                    <option>Selecione...</option>
                <?php 
                    include 'conexao.php';
                    $sql = "SELECT * FROM `categoria`";
                    $buscar = mysqli_query($conexao,$sql);
                    while ($array = mysqli_fetch_array($buscar)) {
                       $nome_categoria = $array['nome_categoria'];  
                ?>
                  <option><?php echo $nome_categoria ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" class="form-control" placeholder="Insira a quantidade do produto" required>
            </div>
            <div class="form-group">

                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" required>
                    <option>Selecione...</option>
                <?php 
                    include 'conexao.php';
                    $sql = "SELECT * FROM `fornecedor`";
                    $buscar = mysqli_query($conexao,$sql);
                    while ($array = mysqli_fetch_array($buscar)) {
                       $nome_fornecedor = $array['nome_fornecedor'];  
                ?>
                  <option><?php echo $nome_fornecedor ?></option>
                <?php } ?>
                </select>
            </div>
            <div style="text-align: right">
                <button type="submit" name="insertprod" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
        </form>
    </div>

<?php 
    include 'footer.php';
?>