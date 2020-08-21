<?php
  function conectar_banco_de_dados() {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco_de_dados = "churrascaria_churras";

    $conexao = new mysqli($servidor, $usuario, $senha, $banco_de_dados);

    if ($conexao->connect_error) {
      die("Ops! Conexão falhou :( " . $conexao->connect_error);
    };

    return $conexao;
  };
?>