<!-- Modal -->
<?php
  session_start();
  include 'conexao.php';
  $id = $_GET['id'];
  $_SESSION['msg2'] = "<div class='alert alert-success'>Fornecedor excluído com sucesso!</div>";
  header('Location:listar_fornecedor.php');

?>

