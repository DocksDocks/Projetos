<?php require_once "../bd/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="pt">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
<meta charset="UTF-8">

<head>
  <title>HMC | Cadastro</title>
  <link rel="stylesheet" media="screen and (max-width: 767px)" href="../css/max767px.css" />
  <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1023px)" href="../css/min768px.css" />
  <link rel="stylesheet" media="screen and (min-width: 1024px) and (max-width: 1535px)" href="../css/min1024px.css" />
  <link rel="stylesheet" media="screen and (min-width: 1536px)" href="../css/min1536px.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>
</head>


<header>
  <a href="../inicio.php">
    <div class="logo">
      <img src="../img/LOGO3.png" alt="">
    </div>
  </a>
  <div class="wrapperlogin">
    <ul class="nav-arealogin">
      <li><a href="../inicio.php"><span>PÁGINA INICIAL</span></a> </li>
    </ul>
  </div>
</header>

<body>
  <div class="signup-box">
    <h1>Registre-se</h1>
    <h4>É de graça e só leva um minuto!</h4>
    <?php
    if (isset($_SESSION['ERROSREGISTRAR'])) {
      echo '<p class="mensagemerro">';
      foreach ($_SESSION['ERROSREGISTRAR'] as $x) {
        echo $x . '<br>';
      }
      echo '</p>';
      unset($_SESSION['ERROSREGISTRAR']);
    }
    ?>
    <form class="classeform" method="POST" action="../bd\controllerUserData.php">
      <label class="classeformlabel">Nome Completo<span>*</span></label>
      <input class="classeforminput" type="text" id="nome" name="nome" placeholder="Fulano Pereira Silva" />

      <label class="classeformlabel">Email<span>*</span></label>
      <input class="classeforminput" type="email" id="email" name="email" placeholder="exemplo@email.com" />

      <label class="classeformlabel" for="senha1">Senha<span>*</span></label>
      <input class="classeforminput" type="password" id="senha1" name="senha1" onkeyup='checkPassword()' placeholder="Senha" />

      <label class="classeformlabel" for="senha2">Confirmar Senha<span>*</span></label>
      <input class="classeforminput" type="password" id="senha2" name="senha2" onkeyup='checkPassword()' placeholder="Confirme a senha" />
      <p2 id="message"></p2><br>
      <input class="classecursor classeformbutton" id="sub" disabled="disabled" type="submit" name="signup" value="Cadastrar">
    </form>
    <p class="pregistro">
      Ao clicar no botão cadastrar,você concorda com nossas <br />
      <a href="politicas_e_termos/cond_termos.php">Condições, Termos</a> e <a href="politicas_e_termos/politicas.php">Política de Privacidade</a>
    </p>
    <p class="para-2">
      Já tem uma conta? <a href="login.php">Faça seu login</a>
    </p>
  </div>
</body>


</html>