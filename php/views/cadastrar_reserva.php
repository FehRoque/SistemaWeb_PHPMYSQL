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
                <h1 class="display-3"> <i class="fas fa-utensils" aria-hidden="true"> </i> Reserva </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <?php
                require_once "../obj/obj_cadastrar_reserva.php";
                ?>

                <form method="post">
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="nome"> Nome: </label>
                            <input type="text" class="form-control" id="nome" required name="nome" placeholder="Ex: Fulano da Silva">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="email"> Email: </label>
                            <input type="email" class="form-control" id="email" required name="email" placeholder="Ex: churras@gmail.com... ">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="telefone"> Telefone: </label>
                            <input type="text" class="form-control" id="telefone" required name="telefone" placeholder="Ex: (xx)xxxxx-xxxx">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="pessoas"> Quantidade de pessoas: </label>
                            <input type="number" class="form-control" id="pessoas" required name="pessoas" placeholder="Ex: 200">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="diaHora"> Dia e Horário : </label>
                            <input type="text" class="form-control" id="diaHora" required name="diaHora" placeholder="Ex: 20/08/2020 18:00">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="mensagem"> Mensagem </label>
                            <input type="textarea" class="form-control" id="mensagem" name="mensagem" placeholder="Ex: Churrasco de aniversário">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-danger">
                        </div>

                        <div class="col-sm-6">
                            <div class="text-center mr-4"> <small style="color: red;" id="erro"></small> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../node_modules/jquery/dist/jquery.mask.min.js"></script>


    <script>
        function voltar() {
            window.location.href = "../../php/views/administrador.php";
        };
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#telefone").mask("00 00000 0000");
            $("#diaHora").mask("00/00/00 00:00");
        });
    </script>
</body>

</html>