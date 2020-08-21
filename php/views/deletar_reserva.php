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
    <?php
    session_start();
    ?>

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

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Deletar </h5>

                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <form method="post">
                                <div class="col-12">
                                    <label for="inputDel" class="ml-1"> Insira o ID da reserva que deseja deletar: </label>
                                    <input type="text" name="id-reserva" id="id-reserva" required>
                                    <button type="submit" name="pesquisar" class="btn btn-danger ml-4">Deletar</button>
                                </div>
                            </form>

                            <?php
                            require_once "../obj/obj_deletar_reserva.php";
                            ?>
                        </div>
                    </div>

                    <div class="form-group pag_atualizar button">
                        <div class="row">

                        </div>
                    </div>

                    <table class="table table-striped table-bordered table-hover mb-5">
                        <thead>
                            <?php
                            require_once "../obj/obj_consulta_reservas.php";
                            ?>
                        </thead>
                    </table>
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