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
    // session_start();
    include('../obj/verifica_login.php');
    ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="#"> Churras </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="ademir.php">Administrador</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-sm-10">
                        <label class="p-1"  style="color: white;">Adm:</label>
                        <label class="p-1"  style="color: white;"> <?php echo $_SESSION['nome'] ?></label>
                    </div>
                    <div class="col-sm-2">
                        <button onclick="sair()" class="btn btn-danger" type="button"> Sair </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5 mb-5">
                <h1 class="display-3"> Painel do Administrador. </h1>
            </div>
        </div>


        <h2 class="text-center mb-2"> Reservas.</h2>
        <p class="text-center mb-5"> Opções de manipulação das reservas cadastradas: </p>



        <div class="row text-center">
        <div class="col-sm-12 mb-5">
                <button onclick="adicionaReserva()" class="btn btn-danger" data-toggle="modal" data-target="#siteModal"> Adicionar </button>
                <button onclick="alteraReserva()" class="btn btn-danger" data-toggle="modal" data-target="#siteModal"> Alterar </button>
                <button onclick="consultaReserva()" class="btn btn-danger" data-toggle="modal" data-target="#siteModal"> Consulta </button>
                <button onclick="deletarReserva()" class="btn btn-danger" data-toggle="modal" data-target="#siteModal2"> Deletar </button>
            </div>
        </div>


        <h2 class="text-center mb-2"> Usuários.</h2>
        <p class="text-center mb-5"> Opções de manipulação das usuários cadastrados: </p>

        <div class="row text-center">
            <div class="col-sm-12 mb-5">
                <button onclick="adicionaUsuario()" class="btn btn-danger" data-toggle="modal" data-target="#siteModal"> Adicionar </button>
                <button onclick="alteraUsuario()" class="btn btn-danger" data-toggle="modal" data-target="#siteModal3"> Alterar </button>
                <button onclick="consultaUsuario()" class="btn btn-danger" data-toggle="modal" data-target="#siteModal"> Consulta </button>
                <button onclick="deletarUsuario()" class="btn btn-danger" data-toggle="modal" data-target="#siteModal4"> Deletar </button>
            </div>
        </div>

        <div class="col-12 mt-5">
            <blockquote class="blockquote text-center">
                <p class="mb-0"> Site inteiramente dedicado ao Projeto Integrador da instituição Senac Taboão da
                    Serra.
                </p>
                <footer class="blockquote-footer">
                    <p>Luan Pereira Santos</p>
                    <p>Felipe Ramos Roque</p>
                    <b>© 2020 Churras, Inc. All Rights Reserved.</b>
                </footer>
            </blockquote>
        </div>
    </div>



    <!-- MODAL -->
    <div class="modal fade" id="siteModal3" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Alterar </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span> &times; </span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <label for="inputDel" class="ml-1"> Insira o ID do usuário que deseja alterar: </label>
                                <input type="search">
                                <button class="btn btn-danger ml-4">Pesquisar</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group pag_atualizar button">
                        <!-- <label for="id"> ID </label> -->
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="nome"> Nome: </label>
                                <input type="text" name="nome" class="form-control" value="" id="nome">
                            </div>

                            <div class="col-sm-6">
                                <label for="senha"> Senha: </label>
                                <input type="text" name="senha" class="form-control" value="" id="senha">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <label for="email"> Email: </label>
                                <input type="text" name="email" class="form-control" value="" id="email">
                            </div>
                        </div>

                        <div class="row m-4">
                            <div class="col-sm-10">

                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-dark">Atualizar</button>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"> Confirmar </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <script>
        function sair() {
            var logout = confirm("Deseja mesmo sair?");

            if (logout) {
                window.location.href = "../../php/obj/logout.php";
            };
        };

        function adicionaReserva() {
            window.location.href = "../../php/views/cadastrar_reserva.php";
        };

        function alteraReserva() {
            window.location.href = "../../php/views/alterar_reserva.php";
        };

        function deletarReserva() {
            window.location.href = "../../php/views/deletar_reserva.php";
        };

        function consultaReserva() {
            window.location.href = "../../php/views/consulta_reservas.php";
        };

        function adicionaUsuario() {
            window.location.href = "../../php/views/cadastrar_usuario.php";
        };

        function alteraUsuario() {
            window.location.href = "../../php/views/alterar_usuario.php";
        }

        function deletarUsuario() {
            window.location.href = "../../php/views/deletar_usuario.php";
        };

        function consultaUsuario() {
            window.location.href = "../../php/views/consulta_usuarios.php";
        };
    </script>
</body>

</html>