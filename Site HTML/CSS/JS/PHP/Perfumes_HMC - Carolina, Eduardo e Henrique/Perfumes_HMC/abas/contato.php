<?php require_once "../bd/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="pt">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">

<head>
    <meta charset="UTF-8">
    <title>HMC | Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="screen and (max-width: 767px)" href="../css/max767px.css" />
    <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1023px)" href="../css/min768px.css" />
    <link rel="stylesheet" media="screen and (min-width: 1024px) and (max-width: 1535px)" href="../css/min1024px.css" />
    <link rel="stylesheet" media="screen and (min-width: 1536px)" href="../css/min1536px.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="scriptcont.js"></script>
</head>

<body>
    <header>
        <a href="../inicio.php">
            <div class="logo">
                <img src="../img/LOGO3.png" alt="">
            </div>
        </a>
        <div class="wrapper">
            <ul class="nav-area">
                <li><a href="../inicio.php"> Início </a> </li>
                <li><a href="revendedores.php">Revendedores</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php"><span>Contato</span></a></li>
            </ul>
        </div>

        <div class="topright">
            <?php
            if (!isset($_SESSION['email'])) { ?>
                <a href="../pagelogin/login.php">LOGIN</a>
                <a href="../pagelogin/registrar.php">CADASTRAR</a>
            <?php } else { ?>
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle topright a2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bi bi-person-lines-fill'> </i>
                        <?= $_SESSION['nome'] ?>
                    </button>
                    <ul class="dropdown-menu bg-dark m-0">
                        <li class="m-0"><a class="dropdown-item m-0" href="../pagelogado\perfil.php"><i class="bi bi-gear"> </i>Configurações</a></li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li class="m-0"><a class="dropdown-item m-0" href="../pagelogado\logout.php"><i class="bi bi-box-arrow-right"> </i>Sair</a></li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </header>


    <form method="POST" action="../bd\controllerUserData.php" class="contatotermos">
    <?php
    if (isset($_SESSION['CONTATOENVIADO'])) {
      echo '<p class="bg-success text-white text-center">';
      echo $_SESSION['CONTATOENVIADO'] . '<br>';
      echo '</p>';
      unset($_SESSION['CONTATOENVIADO']);
    }
    if(isset($_SESSION['CONTATOERRO'])){
        ECHO '<p class="mensagemerro">';
            ECHO $_SESSION['CONTATOERRO'] .'<br>'; 
          ECHO '</p>'; 
          unset($_SESSION['CONTATOERRO']);
        }
    ?>
        <label>
            <div>Nome:
                <input class="areamensagem" name="cont_nome" type="text">
            </div>
        </label>

        <p align="center">
            <label>
                <div class="contatoemail">E-mail:
                    <input class="areamensagem" name="cont_email" type="email">
                </div>
            </label>
        </p>
        <p align="center">
            <label>
                <div align="center">Assunto:
                    <select name="cont_assunto">
                        <option value='0'>Selecione</option>
                        <option value='1'>Sugestão</option>
                        <option value='2'>Crítica</option>
                        <option value='3'>Elogio</option>
                        <option value='4'>Duvida</option>
                    </select>
                </div>
            </label>
        </p>
        <label><b> Mensagem </b></label>
        <p align="center">
            <input class="areamensagem" name="cont_mensagem" type="textarea"></input>
        </p>

        <p align="center" class="botoes">
            <input class="btn btn-success" type="submit" name="contato" value="Enviar" disabled="disabled" /> 
            <label><input class="btn btn-danger" type="reset" name="Submit2" value="Apagar" />
            </label>
        </p>
    </form>
</body>

</html>