<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../node_modules/bootstrap/compiler/bootstrap.css">
    <link href="../CSS/style/css/style.css" rel="stylesheet">
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
                        <button onclick="voltar()" class="btn btn-danger" type="button"> Voltar </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="form-group pag_atualizar button">
            <div class="modal-header">
                <h5 class="modal-title">Alterar Dados</h5>
            </div>

            <?php
            require_once "../obj/obj_altera_usuario.php";
            ?>

            <form method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="id-usurio"> Id: </label>
                        <input type="text" name="id-usuario" class="form-control" id="id-usuario" required>
                    </div>

                    <div class="col-sm-6">

                    </div>

                    <div class="form-group col-sm-6">
                        <label for="nome"> Nome: </label>
                        <input type="text" class="form-control" id="nome-usuario" name="nome-usuario" required>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="sobrenome"> Sobrenome: </label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="email"> Email: </label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="senha"> Senha: </label>
                        <input type="text" class="form-control" id="senha" name="senha" required>
                    </div>

                    <div class="row m-4">
                        <div class="col-sm-10">
                        </div>

                        <div class="col-sm-2">
                            <button class="btn btn-danger">Atualizar</button>
                        </div>
                    </div>
            </form>
        </div>

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <table class="table table-striped table-bordered table-hover mb-5">
                        <thead>
                            <?php
                            require_once "../obj/obj_consulta_usuarios.php";
                            ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

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