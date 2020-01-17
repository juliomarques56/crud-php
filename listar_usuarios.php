<?php 
    include 'header.php';
?>
<div class="container" style="margin-top: 40px;">
    <h4>Lista de Usuários</h4>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Nivel de Acesso</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                    <td>Mark</td>
                    <td>Otto</td>
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