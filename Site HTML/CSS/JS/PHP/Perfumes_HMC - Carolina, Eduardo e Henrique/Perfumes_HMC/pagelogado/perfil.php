<?php require_once "../bd/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="pt">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta charset="UTF-8">

<head>
  <title>HMC | Condições e Termos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <link rel="stylesheet" media="screen and (max-width: 767px)" href="../css/max767px.css" />
  <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1023px)" href="../css/min768px.css" />
  <link rel="stylesheet" media="screen and (min-width: 1024px) and (max-width: 1535px)" href="../css/min1024px.css" />
  <link rel="stylesheet" media="screen and (min-width: 1536px)" href="../css/min1536px.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
  <div class="perfilbox">
    <h1>Perfil</h1>
    <h4>Altere suas informações</h4>
    <?php
    if (isset($_SESSION['SUCESSOEDITAR'])) {
      echo '<p class="bg-success text-white text-center">';
      echo $_SESSION['SUCESSOEDITAR'] . '<br>';
      echo '</p>';
      unset($_SESSION['SUCESSOEDITAR']);
    }
    if (isset($_SESSION['ERROEDITAR'])) {
      echo '<p class="mensagemerro">';
      foreach ($_SESSION['ERROEDITAR'] as $x) {
        echo $x . '<br>';
      }
      echo '</p>';
    }
    ?>
    <?php
    if (isset($_SESSION['ERRODELETAR'])) {
      echo '<p class="mensagemerro">';
      foreach ($_SESSION['ERRODELETAR'] as $x) {
        echo $x . '<br>';
      }
      echo '</p>';
      if (isset($_SESSION['ERRODELETAR'])) unset($_SESSION['ERRODELETAR']);
    }
    ?>
    <form class="classeform" method="POST" action="../bd\controllerUserData.php">

      <label class="classeformlabel">Nome Completo</label>
      <input class="classeforminput" value="<?= $_SESSION['nome'] ?>" type="text" id="nome" name="nome" />
      <input class="btn btn-outline-success mt-10" type="submit" name="editar" value="Salvar Perfil">
      <button type="button" class="btn btn-danger mt-10" id="excluir">
        <i class="bi bi-trash">
        </i>
        Apagar Conta
      </button>
    </form>

  </div>
</body>
<script>
  $('#excluir').click(function(e){
if (window.confirm("Você realmente quer excluir sua conta?")) {
  window.location="../bd/controllerUserData.php?excluir=true";
}
  })
</script>