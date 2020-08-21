<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link href="HTML, CSS e JS/CSS/style/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <!-- requisição da font awesome via cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <title>Churras</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="#"> Churras </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a id="Cima"> </a>
                        <a class="nav-link" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="HTML, CSS e JS/HTML/Cardapio.html" target="_self"> Cardápio </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="php/views/reserva.php"> Reservas </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="HTML, CSS e JS/HTML/Sobre Nós.html"> Sobre nós </a>
                    </li>

                </ul>
              
                    <button onclick="entrar()" class="btn btn-danger my-2 my-sm-0 ml-3" type="submit">
                    <a tabindex="0" role="button" href="php/views/entrar.php" style="color: aliceblue;">Entrar</a></button>
            </div>
        </div>
    </nav>

    <div id="carouselSite" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"> </li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="HTML, CSS e JS/HTML/img/Cardapio Imagens/churras01.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="HTML, CSS e JS/HTML/img/Cardapio Imagens/1234.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="HTML, CSS e JS/HTML/img/Cardapio Imagens/churrasco-da-praca.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only"> Anterior </span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only"> Avançar </span>
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1 class="display-3"> <i class="fas fa-utensils" aria-hidden="true"> </i> Seja Bem-Vindo </h1>
                <p> Boas vindas! Somos a equipe churras.</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"> Nossas Carnes </h4>
                        <h6 class="card-subtitle mb-2 text-muted"> Carnes Nobres </h6>
                        <p class="card-text"> Você encontrará uma variedade de carnes.</p>
                        <img src="HTML, CSS e JS/HTML/img/Cardapio Imagens/churras01.jpg" class="card" style="width: 300px; height: 200px;">
                        <a href="node_modules/bootstrap/" class="card-link" data-toggle="modal" data-target="#siteModal"> Saiba mais </a>
                        <a href="HTML, CSS e JS/HTML/Cardapio.html#Carnes" class="card-link"> Acessar </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Nossas Sobremesas </h4>
                    <h6 class="card-subtitle mb-2 text-muted"> Sobremesas Deliciosas </h6>
                    <p class="card-text"> Se as carnes são boas, imagine as Sobremesas.</p>
                    <img src="HTML, CSS e JS/HTML/img/Cardapio Imagens/sobremesa.jpg" class="card" style="width: 325px; height: 200px;">
                    <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal2"> Saiba mais</a>
                    <a href="HTML, CSS e JS/HTML/Cardapio.html#Sobre" class="card-link"> Acessar</a>
                </div>
            </div>
            <div class="card ml-3">
                <div class="card-body">
                    <h4 class="card-title"> O Estabelecimento </h4>
                    <h6 class="card-subtitle mb-2 text-muted"> A Churrascaria </h6>
                    <p class="card-text"> Um lugar para curtir com a sua família.</p>
                    <img src="HTML, CSS e JS/HTML/img/Cardapio Imagens/churras3.jpg" class="card" style="width: 300px; height: 200px;">
                    <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal3"> Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4"> Galeria </h1>
                    <h6> Confira algumas fotos do nosso estabelecimento</h6>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills justify-content-center" id="pills-nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active mb-5" id="nav-pills-01" data-toggle="pill" href="#nav-item-01"> 1 </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#nav-item-02"> 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="nav-pills-03" data-toggle="pill" href="#nav-item-03"> 3</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="nav-pills-content">
                        <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="HTML, CSS e JS/HTML/img/Lugar Imagens/lugar 1.jpg" style="width: 500px; height: 500px;"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2> Qualidade </h2>
                                    <p>Venha provar as melhores carnes da sua vida em nossa churascaria, Desfrute de nosso cardapio com os melhores cortes de carnes circulando em espetos, Todas preparadas com maestria tendo cortes tradicionais como a Picanha,
                                        Alcatra, Costela, Cupim, Maminha, Fraldinha e Contra-Filé. Não podemos esquecer os mais nobres como Bife Ancho, Filé Mignon assados no ponto certo para proporcionar a você e sua familia a melhor experiência gastronômica.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-item-02" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="HTML, CSS e JS/HTML/img/Lugar Imagens/lugar 5.jpg" style="width: 500px; height: 500px;"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2> Conforto. </h2>
                                    <p>Para sua comodidade, disponibilizamos de Valet com manobrista na porta. Tudo para garantir que você tenha um delicioso almoço ou jantar sem se preocupar com a segurança do seu veículo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-item-03" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="HTML, CSS e JS/HTML/img/Lugar Imagens/lugar 3.jpg"></iframe>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h2> A melhor churrascaria da capital Paulista. </h2>
                                    <p>Estrutura completamente focada na confortabilidade do cliente, A casa comporta até 200 pessoas no salão principal e também disponibiliza uma sala vip com capacidade para até 80 convidados com entrada independente para
                                        eventos sociais ou corporativos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <hr>
            </div>

            <div class="col-sm-4">
                <h4> Horários de Funcionamento </h4>
                <p> Segunda a Quinta: 11h às 15h | 18h às 23h</p>
                <p> Sexta: 11h às 15h | 18h às 00h</p>
                <p> Sábado: 11h às 16h | 18h às 00h</p>
                <p> Domingo: 11h às 16h | 18h às 23h</p>
                <h4> Nossa Localização </h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.766202820163!2d-46.7746138859042!3d-23.612716384657386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5443d07c0669%3A0xb8422f47f59e5cf8!2sSenac%20Tabo%C3%A3o%20da%20Serra!5e0!3m2!1spt-BR!2sbr!4v1596647976423!5m2!1spt-BR!2sbr" width="325" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </p>
            </div>
            <div class="col-sm-4">
                <h4> Menu </h4>
                <div class="list-group text-center">
                    <a href="HTML, CSS e JS/HTML/Cardapio.html" class="list-group-item  list-gorup-item-action" style="color: red;"> Cardápio </a>
                    <a href="php/views/reserva.php" class="list-group-item list-gorup-item-action"
                        style="color: red;"> Reservas </a>
                    <a href="HTML, CSS e JS/HTML/Sobre Nós.html" class="list-group-item list-gorup-item-action" style="color: red;"> Sobre nós </a>
                </div>
            </div>
            <div class="col-sm-4">
                <h4 id="Cont">Contatos</h4>
                <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                    <a href="https://www.instagram.com" target="_blank"><span class="fab fa-instagram redes-sociais"></span></a>
                    <a href="https://www.facebook.com" target="_blank"><span class="fab fa-facebook redes-sociais"></span></a>
                </div>
            </div>
            <div class="col-12 mt-5">
                <blockquote class="blockquote text-center">
                    <p class="mb-0"> Site inteiramente dedicado ao Projeto Integrador da instituição Senac Taboão da Serra.
                    </p>
                    <footer class="blockquote-footer">
                        <p>Luan Pereira Santos</p>
                        <p>Felipe Ramos Roque</p>
                        <b>© 2020 Churras, Inc. All Rights Reserved.</b>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>


    <!-- MODAL -->
    <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Nossas Carnes </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span> &times; </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-14">
                                <h5> Churras </h5>
                                <p> Uma tradição, A evolução do churrasco, A tradição do espeto corrido é um fenômeno razoavelmente novo no estado de São Paulo, o sistema também conhecido como rodízio de carnes permite que sejam saboreados todos os cortes
                                    disponíveis na casa, normalmente servidos no próprio espeto – daí o nome, escolhendo a parte e o ponto que mais agradar.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Fechar </button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL -->
    <div class="modal fade" id="siteModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Nossas Sobremesas </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span> &times; </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-14">
                                <h5> Churras </h5>
                                <p> Possuímos um cardápio de sobremesas deliciosas que deixam qualquer pessoa com água na boca. Nada mais delicioso do que finalizar a refeição com frutas de época, sorvetes, pudim, tortas, bolos ou petit gateau.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Fechar </button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL -->
    <div class="modal fade" id="siteModal3" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> O Estabelecimento </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span> &times; </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-14">
                                <h5> Churras </h5>
                                <p> Presente há mais de 16 anos no estado de São Paulo, a Churrascaria Churras é um espaço aconchegante e de bom gosto, especialmente preparado para receber você e sua família, onde vocês poderão saborear o melhor de nossas
                                    carnes, vinhos e muito mais.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Fechar </button>
                </div>
            </div>
        </div>

        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="HTML, CSS e Js/JS/main.js"></script>
        <script>
            $(function() {
                $('[data-toggle="popover"]').popover()
            })
        </script>
</body>

</html>