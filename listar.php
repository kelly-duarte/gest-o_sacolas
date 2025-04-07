<?php
include "conexao.php";

$sql = "SELECT * FROM sacola";
$resultado = mysqli_query($conexao, $sql);

while ($linha = mysqli_fetch_assoc($resultado)) {
    echo "Nome: " . $linha["nome"] . "<br>";
    echo "CPF: " . $linha["cpf"] . "<br>";
    echo "Telefone: " . $linha["telefone"] . "<br>";
    echo "CEP: " . $linha["cep"] . "<br>";
    echo "Número: " . $linha["numero"] . "<br>";
    echo "Quantidade: " . $linha["quantidade"] . "<br>";
    echo "<hr>";
}

mysqli_close($conexao);
?>
