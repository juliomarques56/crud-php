<?php 
    include 'header.php';
?>
<div class="container" style="margin-top: 40px;">
    <h4>Lista de Usuários</h4>
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
        <tbody>
            <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>
                    <a class="btn btn-sm btn-warning" style="color:#fff" href=""><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <a class="btn btn-sm btn-danger" style="color:#fff" href=""><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php
    include 'footer.php'
?>