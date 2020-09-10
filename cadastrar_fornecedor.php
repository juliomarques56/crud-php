<?php 
    include 'header.php';
?>
    <div class="container"  style="width: 400px; margin-top: 40px;">
        <h4>Cadastro de Fornecedor</h4>
        <?php 
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form action="_inserir.php" method="post">
            <div class="form-group">
                <label>Fornecedor</label>
                <input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do fornecedor" required>
            </div>
            <div style="text-align: right">
                <button type="submit" name="insertfor" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
    
<?php 
    include 'footer.php';
?>