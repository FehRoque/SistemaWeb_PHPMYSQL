<?php 
    require_once "../obj/conexao.php";

    $conexao = conectar_banco_de_dados();

    if (!isset($_REQUEST["id-reserva"]) || 
        empty($_REQUEST["id-reserva"])) {
        return;
    };

    $id = $_REQUEST["id-reserva"];
    $novoNome = $_REQUEST["nome"];
    $novoEmail = $_REQUEST["email"];
    $novoTelefone = $_REQUEST["telefone"];
    $novaQuantidadePessoas = $_REQUEST["pessoas"];
    $novoDiaHorario = $_REQUEST["diaHora"];
    $novaMensagem = $_REQUEST["mensagem"];

    $sql = "SELECT * FROM reserva 
                    WHERE id_reserva = $id";

    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        $sql = "UPDATE reserva SET nome = '$novoNome',
                    email = '$novoEmail',
                    telefone = '$novoTelefone',
                    quantidade_pessoas = '$novaQuantidadePessoas',
                    dia_horario = '$novoDiaHorario',
                    mensagem = '$novaMensagem' 
                WHERE id_reserva = $id";

        if ($conexao->query($sql) === TRUE) {
            echo '<div class="alert alert-danger" role="alert">';
            echo "Atualizado o id $id <br>";
            echo '</div>';
        } else {
            echo "Ops! Algo de errado: Tente novamente <br>" . $conexao->error;
        };
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Id inválido ou inexistente
        </div>';
    };
?>