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
                  
                </ul>
                <div class="row">
                    <div class="col-sm-6">
                        <label> </label>
                    </div>
                    <div class="col-sm-6">
                        <button onclick="voltar()" class="btn btn-danger" type="button"> Voltar </button>
                    </div>
                </div>
            </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1 class="display-3"> <i class="fas fa-utensils" aria-hidden="true"> </i> Cadastro </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">

                <?php
                require_once "../obj/obj_cadastrar_usuario.php";
                ?>

                <form method="post">
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="nome"> Nome : </label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome..." required name="nome">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="inputtel"> Sobrenome: </label>
                            <input type="tel" class="form-control" id="inputtel" placeholder="Digite seu sobrenome..." required name="sobrenome">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputSenha"> Email </label>
                            <input type="email" class="form-control" id="inputSenha" placeholder="Digite seu email..." required name="email">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="inputSenha"> Senha: </label>
                            <input type="password" class="form-control" id="inputSenha" placeholder="Digite sua senha..." required name="senha">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-danger">Cadastrar</button>
                </form>
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

        <script>
        function voltar() {
            window.location.href = "../../php/views/administrador.php";
        };
    </script>
</body>

</html>