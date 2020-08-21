<?php
    require_once "../obj/conexao.php";

    $conexao = conectar_banco_de_dados();

    if (!isset($_POST["nome"]) || 
        empty($_POST["nome"])) {
        return;
    };

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $qntPessoas = $_POST["pessoas"];
    $diaHora = $_POST["diaHora"];
    $msg = $_POST["mensagem"];

    $sql = "INSERT INTO reserva (
        nome,
        email,
        telefone,
        quantidade_pessoas,
        dia_horario,
        mensagem
     ) values
     ( 
        '$nome',
        '$email',
        '$telefone',
        $qntPessoas,
        '$diaHora',
        '$msg'
     )";

    if ($conexao->query($sql)) {
        echo "Reserva feita com sucesso! Entraremos em contato o mais rápido possível.";
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ops!</strong> Ocorreu um erro. Contate o Administrador.
            
            <br>
            
            '.$conexao->error.'

            <br>

            '.$sql.'

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    };
?>