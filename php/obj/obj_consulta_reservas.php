<?php
require_once "../obj/conexao.php";

$conexao = conectar_banco_de_dados();

$sql = "SELECT id_reserva AS identificador, 
        nome,
        email,
        telefone,
        quantidade_pessoas,
        dia_horario,
        mensagem 
        FROM reserva";

$resultado = $conexao->query($sql);


echo '<h2 class="text-center mb-5"> Reservas cadastradas</h2>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Quantidade de Pessoas</th>
        <th>Dia e Horário</th>
        <th>Mensagem</th>
    </tr>';
if ($resultado->num_rows > 0) {
    while ($linha = mysqli_fetch_array($resultado)) {
        $id = $linha['identificador'];
        $nome = $linha['nome'];
        $email = $linha['email'];
        $telefone = $linha["telefone"];
        $qntPessoas = $linha["quantidade_pessoas"];
        $diaHora = $linha["dia_horario"];
        $mensagem = $linha["mensagem"];

        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $nome . "</td>";
        echo "<td>" . $email . "</td>";
        echo "<td>" . $telefone . "</td>";
        echo "<td>" . $qntPessoas . "</td>";
        echo "<td>" . $diaHora . "</td>";
        echo "<td>" . $mensagem . "</td>";
        echo "</tr>";
    };
} else {
    echo "Nenhum registro foi localizado!";
}
