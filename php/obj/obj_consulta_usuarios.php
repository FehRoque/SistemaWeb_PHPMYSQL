<?php 
    require_once "../obj/conexao.php";

    $conexao = conectar_banco_de_dados();

    
    $sql = "SELECT id_usuario AS identificador, 
        nome,
        sobrenome,
        email,
        senha 
        FROM usuario";

    $resultado = $conexao->query($sql);
    
    echo '<h2 class="text-center mb-5"> Usuários cadastrados</h2>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Senha</th>
        </tr>';

    if($resultado->num_rows > 0) {
        while($linha = $resultado->fetch_assoc()) {
            $id = $linha["identificador"];
            $nome = $linha["nome"];
            $sobrenome = $linha["sobrenome"];
            $email = $linha["email"];
            $senha = $linha["senha"];
            
            echo "<tr>";
            echo "<td>" . $id . "</td>";
            echo "<td>" . $nome . "</td>";
            echo "<td>" . $sobrenome . "</td>";
            echo "<td>" . $email . "</td>";
            echo "<td>" . $senha . "</td>";
            echo "</tr>";
        };
    } else {
        echo "Nenhum registro foi localizado!";
    };
?>
