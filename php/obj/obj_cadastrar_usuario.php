<?php
    require_once "../obj/conexao.php";

    $conexao = conectar_banco_de_dados();

    if (!isset($_POST["nome"]) || 
        empty($_POST["nome"])) {
        return;
    };

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO usuario (
                nome,
                sobrenome,
                email,
                senha
            ) VALUES 
            (
                '$nome',
                '$sobrenome',
                '$email',
                '$senha'
            )";

    if ($conexao->query($sql)) {
        echo "Cadastro realizado com sucesso!";
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