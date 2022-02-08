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
                    <img class="card-img-top" src="../../img/perfumes/aroma1.jpg" alt="Aromatizador Talco">
                    <div class="card-body cartacorpoPRODUTO">
                        <p class="card-text">Aromatizador Talco</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <p class="tituloproduto">Aromatizador Talco</p>
                <p class="descricaoproduto"><b>Descrição: </b>O Aromatizador Talco tem cheirinho suave, como de um cantinho de bebê, e é um dos preferidos para uso em quartos e roupeiros, embora seja indicação para a aplicação no ambiente que preferir. As essências e fragrâncias dos Aromatizantes Concentrados Coala deixam o ambiente com um perfume duradouro e a agradável sensação de bem-estar, que dura por muito mais tempo. Podem ser utilizados em qualquer tipo ambiente, seja ele residencial ou comercial, interno ou externo. Seu uso é muito eficaz para aromatizar ambientes com pisos e azulejos, canil e locais com animais. Basta aplicar algumas gotinhas em ralos, banheiros e vasos sanitários para deixar os ambientes com aroma de frescor e cheirinho de limpeza. Produto concentrado, de alto rendimento e qualidade superior, com um prático bico dosador que evita o desperdício.</p>
            </div>
        </div>
    </div>
</body>

</html>