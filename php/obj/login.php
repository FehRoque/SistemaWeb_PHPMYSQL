<?php
    session_start();

    require_once "../obj/conexao.php";

    $conexao = conectar_banco_de_dados();

    if (!isset($_REQUEST["nome-usuario"]) &&
        !isset($_REQUEST["senha-usuario"])) {
        return;
    }

    $nome = $_REQUEST["nome-usuario"];
    $senha = $_REQUEST["senha-usuario"];

    // $senha_criptografada = md5($senha);

    $sql = "SELECT id_usuario, nome FROM usuario
                WHERE nome = '$nome'
                AND senha = '$senha'";

    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        $_SESSION['nome'] = $nome;
        header("location: ./administrador.php");
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Usuário e/ou senha inválidos
            </div>';
    };
?>