<?php
if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['comentario'])) {
    include_once('conexao.php');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $comentario = $_POST['comentarios'];

    // Atualiza o registro com os novos dados
    $sqlUpdate = "UPDATE sleventos SET nome='$nome', email='$email', telefone='$telefone', comentarios='$comentario' WHERE id=$id";
    $resultUpdate = $conexao->query($sqlUpdate);

    if ($resultUpdate) {
        echo "Registro atualizado com sucesso.";
    } else {
        echo "Erro ao atualizar registro: " . $conexao->error;
    }

    // Feche a conexão após as operações
    mysqli_close($conexao);
} else {
    echo "ID ou dados não fornecidos.";
}

header('Location: tabela.php');
?>
