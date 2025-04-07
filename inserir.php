<?php
include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO sacola (nome, cpf, telefone, cep, numero, quantidade) 
        VALUES ('$nome', '$cpf', '$telefone', '$cep', '$numero', $quantidade)";

if (mysqli_query($conexao, $sql)) {
    echo "✅ Cadastro realizado com sucesso!";
} else {
    echo "❌ Erro ao cadastrar: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
