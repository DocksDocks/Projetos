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
                    <img class="card-img-top" src="../../img/perfumes/aroma2.jpg" alt="Aromatizador Lavanda">
                    <div class="card-body cartacorpoPRODUTO">
                        <p class="card-text">Aromatizador Lavanda</p>
                    </div>
                </div>
            </div>
            <div class='col-lg-8 col-md-8 col-sm-6 col-xs-12'>
                <p class="tituloproduto">Aromatizador Lavanda</p>
                <p class="descricaoproduto"><b>Descrição: </b>A lavanda possui excelentes propriedades para quem busca conforto e serenidade ao chegar em casa.
Borrifar o Aromatizante antes de ir trabalhar irá garantir um cheirinho de lavanda para a casa quando você abrir a porta buscando refúgio e tranquilidade.
Perfeito para relaxar sem sair de casa! Além disso, o odorizador de ambiente pode ser utilizado para perfumar o interior de carros, sendo o melhor companheiro para as longas viagens!
Para tornar o momento de relaxamento ainda mais intenso, use a linha completa de produtos de Lavanda Verde Vivo, que inclui a Água Para Perfumar, o Difusor de Varetas e prático e perfumado Sachet aromático. Todos esses produtos são excelentes lembrancinhas e podem ser encontrados em lojas de essências por todo Brasil! </p>
            </div>
        </div>
    </div>
</body>

</html>