<?php
    session_start();

    if(!$_SESSION['nome']) {
        header('location: ./entrar.php');
        exit();
    };
?>