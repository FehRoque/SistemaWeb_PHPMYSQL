<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../node_modules/bootstrap/compiler/bootstrap.css">
    <link href="../../HTML, CSS e JS/CSS/style/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../node_modules/font-awesome/css/font-awesome.css">
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
                        <a class="nav-link" href="../../index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../HTML, CSS e JS/HTML/Cardapio.html" target="_self"> Cardápio </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./reserva.php"> Reservas </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../HTML, CSS e JS/HTML/Sobre Nós.html"> Sobre nós </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>   
    
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1 class="display-3"> <i class="fas fa-utensils" aria-hidden="true"> </i> Login </h1>               
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                  
            <?php
                require_once "../obj/login.php";
            ?>

            <form method="post">
                <div class="form-group">
                    <label for="nome-usuario">Nome:</label>
                    <input type="text" name="nome-usuario" class="form-control" id="nome-usuario" placeholder="Digite seu nome..." required>
                </div>
                <div class="form-group">
                    <label for="senha-usuario">Senha</label>
                    <input type="password" name="senha-usuario" class="form-control" id="senha-usuario" placeholder="Digite sua senha..." required>
                </div>
                <button type="submit" class="btn btn-danger">Entrar</button>
            </form>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <hr>
            </div>
            <div class="col-sm-4">
                <h4> Horários de Funcionamento </h4>
                <p> Segunda a Sexta: 10h às 22h </p>
                <p> Sábado e Domingo: 11h às 23h </p>
                <p> Feriados: 11h às 23h </p>

                <h4> Nossa Localização </h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.766202820163!2d-46.7746138859042!3d-23.612716384657386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5443d07c0669%3A0xb8422f47f59e5cf8!2sSenac%20Tabo%C3%A3o%20da%20Serra!5e0!3m2!1spt-BR!2sbr!4v1596647976423!5m2!1spt-BR!2sbr"
                    width="325" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </p>

            </div>
            <div class="col-sm-4">
                <h3> Menu </h3>
                <div class="list-group text-center">
                    <a href="../../index.php" class="list-group-item list-gorup-item-action" style="color: red;"> Início </a>
                    <a href="../../HTML, CSS e JS/HTML/Cardapio.html" class="list-group-item  list-gorup-item-action" style="color: red;"> Cardápio </a>
                    <a href="../../HTML, CSS e JS/HTML/Sobre Nós.html" class="list-group-item list-gorup-item-action" style="color: red;"> Sobre nós </a>
                    <a href="./reserva.php" class="list-group-item list-gorup-item-action"
                        style="color: red;"> Reservas </a>
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
                    <p class="mb-0"> Site inteiramente dedicado ao Projeto Integrador da instituição Senac Taboão da Serra.</p>
                    <footer class="blockquote-footer">
                        <p>Luan Pereira Santos</p>
                        <p>Felipe Ramos Roque</p>

                        <b>© 2020 Churras, Inc. All Rights Reserved.</b>
                    </footer>
                </blockquote>
            </div>
        </div>

    <script src=""></script>
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>