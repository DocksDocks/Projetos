<?php require_once "../../bd/controllerUserData.php"; ?>
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
    <link rel="stylesheet" media="screen and (max-width: 767px)" href="../../css/max767px.css" />
    <link rel="stylesheet" media="screen and (min-width: 768px) and (max-width: 1023px)" href="../../css/min768px.css" />
    <link rel="stylesheet" media="screen and (min-width: 1024px) and (max-width: 1535px)" href="../../css/min1024px.css" />
    <link rel="stylesheet" media="screen and (min-width: 1536px)" href="../../css/min1536px.css" />
</head>

<header>
    <a href="../../inicio.php">
        <div class="logo">
            <img src="../../img/LOGO3.png" alt="">
        </div>
    </a>
    <div class="wrapperlogin">
        <ul class="nav-arealogin">
            <li class="voltarproduto"><a href="../../abas\produtos.php"><span>VOLTAR</span></a> </li>
        </ul>
    </div>
</header>

<body>
    <div class="produtounicobox">
        <div class='row'>
            <div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'>
                <div class="card">
                    <img class="card-img-top" src="../../img/perfumes/aroma3.jpg" alt="Aromatizador Lírio Verde">
                    <div class="card-body cartacorpoPRODUTO">
                        <p class="card-text">Aromatizador Lírio Verde</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <p class="tituloproduto">Aromatizador Lírio Verde</p>
                <p class="descricaoproduto"><b>Descrição: </b>Na Aromaterapia: Usada na aromaterapia para aliviar o cansaço físico, mental e falta de concentração. Ajuda a ter mais criatividade e seu aroma cítrico promove sensação refrescância.
A Essência Aroma Lírio Verde , foi desenvolvida para ser usada em difusores de ambiente, tornando o ambiente mais aconchegante e elegante. Ela conta com alta fixação e alta durabilidade, permitindo deixar o ambiente aromatizado por um longo período.
</p>
            </div>
        </div>
    </div>
</body>

</html>