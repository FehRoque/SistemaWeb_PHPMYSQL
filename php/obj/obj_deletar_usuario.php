<?php
    require_once "../obj/conexao.php";

    $conexao = conectar_banco_de_dados();

    if (!isset($_REQUEST["id-usuario"])) {
        return;
    };

    $id = $_REQUEST["id-usuario"];

    $sql = "SELECT * FROM usuario 
                WHERE id_usuario = $id";

    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        $sql = "DELETE FROM usuario WHERE id_usuario = $id";

        if ($conexao->query($sql) === TRUE) {
            echo '<div class="alert alert-danger" role="alert">';
            echo "Excluido registro com o id '$id'";
            echo '</div>';

        } else {
            echo "Ops! Algo de errado: <br>" . $sql . "<br>" . $conexao->error;
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
        Id inválido ou inexistente
        </div>';
    };
?>