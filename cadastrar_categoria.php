<?php 
    include 'header.php';
?>
    <div class="container"  style="width: 400px; margin-top: 40px;">
        <h4>Cadastro de Categoria</h4>
        <?php 
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form action="_inserir.php" method="post">
            <div class="form-group">
                <label>Categoria</label>
                <input type="text" name="categoria" class="form-control" placeholder="Digite o nome da categoria" required>
            </div>
            <div style="text-align: right">
                <button type="submit" name="insertcat" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
    
<?php 
    include 'footer.php';
?>