<?php
$hostname = "localhost";
$bancodedados = "orcamentos";
$usuario = "root";
$senha = "";

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($conexao->connect_errno) {
    echo "Falha ao conectar: " . $conexao->connect_error;
}
?>

