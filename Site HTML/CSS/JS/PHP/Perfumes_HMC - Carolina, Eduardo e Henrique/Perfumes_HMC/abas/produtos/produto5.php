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
                    <img class="card-img-top" src="../../img/perfumes/produto2.jpg" alt="212 VIP ROSE">
                    <div class="card-body cartacorpoPRODUTO">
                        <p class="card-text">212 VIP ROSE</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <p class="tituloproduto">212 VIP ROSE</p>
                <p class="descricaoproduto"><b>Descrição: </b> Uma fragrância autêntica e espontânea, perfeita para refletir o impulso de energia e de festa para as mulheres mais interessantes da cidade. Um perfume ultra feminino, elegante e impactante. <br> <b>Sobre a Fragrância:</b>
O perfume mais vendido de Carolina Herrera é o coração das melhores festas de Nova Iorque, trazendo para a mulher uma elegância e confiança extras traduzidas através de aromas do Champagne Rosé, complementado por notas de flor de pêssego, pimenta rosa, âmbar e almíscar branco. Uma fragrância floral frutada de personalidade e feminilidade única.<br>
<b>Sobre o Frasco:</b>
Sua embalagem Rosé fosca se mistura com um degradê que vai do transparente ao champagne, essa junção nos remete à exclusividade da mulher 212. Com esse perfume best seller você pode mudar tudo, reescrever as regras e montar um novo capítulo da sua vida.</p>
            </div>
        </div>
    </div>
</body>

</html>