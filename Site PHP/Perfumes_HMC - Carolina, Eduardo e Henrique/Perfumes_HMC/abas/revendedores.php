<?php require_once "../bd/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="pt">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">

<head>
  <meta charset="UTF-8">
  <title>HMC | Revendedores</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" media="screen and (max-width: 767px)" href="../css/max767px.css" />
  <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1023px)" href="../css/min768px.css" />
  <link rel="stylesheet" media="screen and (min-width: 1024px) and (max-width: 1535px)" href="../css/min1024px.css" />
  <link rel="stylesheet" media="screen and (min-width: 1536px)" href="../css/min1536px.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="scriptrev.js"></script>
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
        <li><a href="revendedores.php"><span>Revendedores</span></a></li>
        <li><a href="produtos.php">Produtos</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
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
  <?php if (!isset($_SESSION['email'])) { ?>
    <div class="bemvindo-text posicionarrev">
      <h1 class="alturalinha">
        VIRE REVENDEDOR<br>FAÇA SEU <span class="botaologin">LOGIN </span> <br> PARA CONTINUAR</h1>
    </div>
    <?php
  } else if (isset($_SESSION['rev_id'])) { ?>
   <div class="idrevbox"> 
    <p class="bg-success text-white text-center">
    <?php if(isset($_SESSION['REVAPLICA'])) echo $_SESSION['REVAPLICA'] . '<br>'; ?>
    </p>
    Seu código de revendedor é: 
    <br>
    <p class="codigobox">
    <?php echo $_SESSION['rev_id'] . '<br>'; ?>
    <?php if(isset($_SESSION['REVAPLICA'])) unset($_SESSION['REVAPLICA']); ?>
    </p>
    <p class="extrainforev">
    Confira seu e-mail para mais informações.
  </p>
    <?php } else { ?>
      <div class="revendedor-box">
      <h1 class="classeh1">Seja um revendedor</h1>
      <?php
      if(isset($_SESSION['REVAPLICAERRO'])){
        ECHO '<p class="mensagemerro">';
            ECHO $_SESSION['REVAPLICAERRO'] .'<br>'; 
          ECHO '</p>'; 
          unset($_SESSION['REVAPLICAERRO']);
        }
        ?>
      <form method="POST" action="../bd\controllerUserData.php" class="classeform">
        <label class="classeformlabel">Data de Nascimento</label>
        <input type="text" id="rev.nome" name="rev_nascimento" placeholder="1981-01-01" class="classeforminput" />
        <label class="classeformlabel">Cidade</label>
        <input type="text" id="rev.email" name="rev_cidade" placeholder="São Paulo" class="classeforminput" />
        <input class="classecursor classeformbutton mt-10" id="rev" disabled="disabled" type="submit" name="aplicar" value="Aplicar">
      </form>
      <p class="revendedorp">
        Ao aplicar, verifique seu email para continuar sua aplicação.
      </p>
    <?php } ?>
    </div>

</body>

</html>
<script>
  $('.botaologin').click(function(e) {
    window.location = '../pagelogin/login.php';
  });
</script>