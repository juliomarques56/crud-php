<?php 
    session_start();
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
        <form action="_inserir_produto.php" method="post">
            <div class="form-group">
                <label>Código Produto</label>
                <input type="number" name="codigoproduto" class="form-control" placeholder="Insira o número do produto">
            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" name="nomeproduto" class="form-control" placeholder="Insira o nome do produto">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria">
                  <option>Periférico</option>
                  <option>Hardware</option>
                  <option>Software</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" class="form-control" placeholder="Insira a quantidade do produto">
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor">
                  <option>Fornecedor A</option>
                  <option>Fornecedor B</option>
                  <option>Fornecedor C</option>
                </select>
            </div>
            <div style="text-align: right">
                <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
        </form>
    </div>

<?php 
    include 'footer.php';
?>