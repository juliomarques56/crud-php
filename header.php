<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Web</title>
    <link rel="stylesheet" href="src/css/bootstrap.css">
    <link rel="stylesheet" href="src/css/style.css">
    <script src="https://kit.fontawesome.com/963d9be9b3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="pt-5">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <a class="navbar-brand" href="menu.php">CRUD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PRODUTO
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="cadastrar_produtos.php">Cadastrar Produto</a>
                            <a class="dropdown-item" href="listar_produtos.php">Listar Produto</a>                    
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CATEGORIA
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="cadastrar_categoria.php">Cadastrar Categoria</a>
                            <a class="dropdown-item" href="listar_categoria.php">Listar Categoria</a>                    
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        FORNECEDOR
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="Cadastrar_fornecedor.php">Cadastrar Fornecedor</a>
                            <a class="dropdown-item" href="listar_fornecedor.php">Listar Fornecedor</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        USUÁRIO
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="cadastrar_usuario.php">Cadastrar Usuário</a>
                            <a class="dropdown-item" href="listar_usuarios.php">Listar Usuários</a>                    
                            <a class="dropdown-item" href="#">Aprovar Usuários</a>                    
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <span class="dropdown-item disabled"><i class="far fa-user"></i>&nbsp;Jotamarqques</span>
                            <a class="dropdown-item " href="index.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Sair</a>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
      </div>
