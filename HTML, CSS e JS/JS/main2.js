function sair() {
    var logout = confirm("Deseja mesmo sair?");

    if (logout) {
        window.location.href = "./views/entrar.php";
    };
};
