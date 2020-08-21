<?php
    require_once "../obj/conexao.php";

    $conexao = conectar_banco_de_dados();

    if (!isset($_POST["id-usuario"]) || 
        empty($_POST["id-usuario"])) {
        return;
    };

    $id = $_POST["id-usuario"];
    $novoNome = $_POST["nome-usuario"];
    $novoSobrenome = $_POST["sobrenome"];
    $novoEmail = $_POST["email"];
    $novaSenha = $_POST["senha"];

    $sql = "SELECT * FROM usuario 
                        WHERE id_usuario = $id";

    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        $sql = "UPDATE usuario SET nome = '$novoNome',
                        sobrenome = '$novoSobrenome',
                        email = '$novoEmail',
                        senha = '$novaSenha' 
                    WHERE id_usuario = $id";

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