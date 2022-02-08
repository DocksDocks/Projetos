<?php require_once "../bd/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="pt">
<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">

<head>
	<meta charset="UTF-8">
	<title>HMC | Produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" media="screen and (max-width: 767px)" href="../css/max767px.css" />
	<link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1023px)" href="../css/min768px.css" />
	<link rel="stylesheet" media="screen and (min-width: 1024px) and (max-width: 1535px)" href="../css/min1024px.css" />
	<link rel="stylesheet" media="screen and (min-width: 1536px)" href="../css/min1536px.css" />
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
				<li><a href="produtos.php"><span>Produtos</span></a></li>
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
	<div class="produtosbox">
		<div class='row'>
			<div class='col-4'>
				<a href="produtos\produto1.php" class="link">
					<div class="card cardmargin">
						<img class="card-img-top" src="../img/perfumes/aroma1.jpg" alt="Aromatizador Talco">
						<div class="card-body cartacorpo">
							<p class="card-text">Aromatizador Talco</p>
						</div>
					</div>
				</a>
			</div>
			<div class='col-4'>
				<a href="produtos\produto2.php" class="link">
					<div class="card cardmargin">
						<img class="card-img-top" src="../img/perfumes/aroma2.jpg" alt="Aromatizador Lavanda">
						<div class="card-body cartacorpo">
							<p class="card-text">Aromatizador Lavanda</p>
						</div>
					</div>
				</a>
			</div>
			<div class='col-4'>
				<a href="produtos\produto3.php" class="link">
					<div class="card cardmargin">
						<img class="card-img-top" src="../img/perfumes/aroma3.jpg" alt="Aromatizador Lírio Verde">
						<div class="card-body cartacorpo">
							<p class="card-text">Aromatizador Lírio Verde</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row">
			<div class='col-4'>
				<a href="produtos\produto4.php" class="link">
					<div class="card cardmargin">
						<img class="card-img-top" src="../img/perfumes/ck.jpg" alt="Calvin Klein One">
						<div class="card-body cartacorpo">
							<p class="card-text">Calvin Klein One</p>
						</div>
					</div>
				</a>
			</div>
			<div class='col-4'>
				<a href="produtos\produto5.php" class="link">
					<div class="card cardmargin">
						<img class="card-img-top" src="../img/perfumes/produto2.jpg" alt="212 VIP Rose">
						<div class="card-body cartacorpo">
							<p class="card-text">212 VIP Rose</p>
						</div>
					</div>
				</a>
			</div>
			<div class='col-4'>
				<a href="produtos\produto6.php" class="link">
					<div class="card cardmargin">
						<img class="card-img-top" src="../img/perfumes/produto3.jpg" alt="La Vie Est Belle">
						<div class="card-body cartacorpo">
							<p class="card-text">La Vie Est Belle</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

</body>

</html>