<?php require_once "../bd/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="pt">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
<meta charset="UTF-8">

<head>
  <title>HMC | Login</title>
  <link rel="stylesheet" media="screen and (max-width: 767px)" href="../css/max767px.css" />
  <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1023px)" href="../css/min768px.css" />
  <link rel="stylesheet" media="screen and (min-width: 1024px) and (max-width: 1535px)" href="../css/min1024px.css" />
  <link rel="stylesheet" media="screen and (min-width: 1536px)" href="../css/min1536px.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
  <div class="login-box">
    <h1>Faça o Login</h1>
    <?php
    if(isset($_SESSION['ERROLOGIN'])){
      ECHO '<p class="mensagemerro">';
      foreach($_SESSION['ERROLOGIN'] as $x){
          ECHO $x.'<br>';
        }      
        ECHO '</p>'; 
      }
      unset($_SESSION['ERROLOGIN']);
    ?>
    <form class="classeform" action="../bd\controllerUserData.php" method="POST">
      <label class="classeformlabel">Email</label>
      <input class="classeforminput" type="email" id="email" name="email" placeholder="" />
      <label class="classeformlabel">Senha</label>
      <input class="classeforminput" type="password" id="senha1" name="senha1" placeholder="" />
      <input class="classecursor classeformbutton mt-10" disabled="disabled" type="submit" name="login" value="Entrar">
    </form>
    <p class="para-2">
      Não tem uma conta? <a href="registrar.php">Registre-se aqui</a>
    </p>
  </div>
</body>

</html>
<script>
  <?php if(isset($_GET['deletar'])){
    echo "alert('Usuário deletado com sucesso!')";
  } ?>
  <?php if(isset($_SESSION['REGISTROSUCESSO'])){
    echo "alert('".$_SESSION['REGISTROSUCESSO']."')";
    unset($_SESSION['REGISTROSUCESSO']);
  } ?>
</script>