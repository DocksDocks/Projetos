<?php require_once "bd/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Perfumes HMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" media="screen and (max-width: 767px)" href="css/max767px.css" />
    <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1023px)" href="css/min768px.css" />
    <link rel="stylesheet" media="screen and (min-width: 1024px) and (max-width: 1535px)" href="css/min1024px.css" />
    <link rel="stylesheet" media="screen and (min-width: 1536px)" href="css/min1536px.css" />
</head>


<body>
    <header>
        <a href="inicio.php">
            <div class="logo">
                <img src="img\LOGO3.png" alt="">
            </div>
        </a>
        <div class="wrapper">
            <ul class="nav-area">
                <li><a href="inicio.php"><span>Início</span></a> </li>
                <li><a href="abas\revendedores.php">Revendedores</a></li>
                <li><a href="abas\produtos.php">Produtos</a></li>
                <li><a href="abas\sobre.php">Sobre</a></li>
                <li><a href="abas\contato.php">Contato</a></li>
            </ul>
        </div>
        <div class="topright">
            <?php
            if (!isset($_SESSION['email'])) { ?>
                <a href="pagelogin\login.php">LOGIN</a>
                <a href="pagelogin\registrar.php">CADASTRAR</a>
            <?php } else {  ?>
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle topright a2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bi bi-person-lines-fill'> </i>
                        <?= $_SESSION['nome'] ?>
                    </button>
                    <ul class="dropdown-menu bg-dark m-0">
                        <li class="m-0"><a class="dropdown-item m-0" href="pagelogado\perfil.php"><i class="bi bi-gear"> </i>Configurações</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li class="m-0"><a class="dropdown-item m-0" href="pagelogado\logout.php"><i class="bi bi-box-arrow-right"> </i>Sair</a></li>
                    </ul>
                </div>
            <?php } ?>
        </div>
        <div class="bemvindo-text">
            <h1>
                A SUA <span>PERFUMARIA</span></h1>
            <a href="abas\contato.php">NOS CONTATE</a>
            </li>
        </div>
    </header>

</body>

</html>