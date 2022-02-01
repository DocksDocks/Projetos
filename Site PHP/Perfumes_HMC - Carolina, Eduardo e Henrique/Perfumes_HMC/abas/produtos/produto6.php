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
                    <img class="card-img-top" src="../../img/perfumes/produto3.jpg" alt="La Vie Est Belle">
                    <div class="card-body cartacorpoPRODUTO">
                        <p class="card-text">La Vie Est Belle</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <p class="tituloproduto">La Vie Est Belle</p>
                <p class="descricaoproduto"><b>Descrição: </b> O manifesto de uma nova era, universal mas, ainda sim, pessoal. A feminilidade do Lancôme é uma escolha das mulheres e não um padrão a elas imposto. A escolha de viver a vida, preenchê-la com beleza e trilhar sua própria história.<br> <b> Sobre a Fragrância: </b>
Pela primeira vez, Anne Flipo, Olivier Polge e Ropion Dominique - três dos maiores perfumistas franceses - uniram seus talentos para compor uma fragrância excepcional cujo diferencial está na simplicidade. Afinal, menos é mais.
<br> <b> Sobre o Frasco: </b>
O frasco do perfume foi pensado para traduzir a mulher livre e feliz. Ele consiste na realização de um projeto iniciado em 1949 por Armand Petitjean, fundador de Lancôme. </p>
            </div>
        </div>
    </div>
</body>

</html>