<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Verifica se o ID foi passado via GET
if (isset($_GET['id'])) {
    include_once('conexao.php');

    $id = $_GET['id'];

    // Verifica se o registro existe antes de mostrar o formulário de edição
    $sqlSelect = "SELECT * FROM sleventos WHERE id=$id";
    $resultSelect = $conexao->query($sqlSelect);

    if ($resultSelect->num_rows > 0) {
        $user_data = $resultSelect->fetch_assoc();

        // Mostra o formulário de edição preenchido com os dados atuais
        echo "<form action='processar_atualizacao.php' method='post'>";
        echo "<input type='hidden' name='id' value='" . $user_data['id'] . "'>";
        echo "Nome: <input type='text' name='nome' value='" . $user_data['nome'] . "'><br>";
        echo "Email: <input type='text' name='email' value='" . $user_data['email'] . "'><br>";
        echo "Telefone: <input type='text' name='telefone' value='" . $user_data['telefone'] . "'><br>";
        echo "Comentário: <textarea name='comentario'>" . $user_data['comentarios'] . "</textarea><br>";
        echo "<input type='submit' value='Atualizar'>";
        echo "</form>";
    } else {
        echo "Registro não encontrado.";
    }

    // Fecha a conexão após as operações
    mysqli_close($conexao);
} else {
    echo "ID não fornecido.";
}
?>

</body>
</html>
