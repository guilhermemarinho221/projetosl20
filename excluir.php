<?php
// Verifica se o ID foi passado via GET
if (isset($_GET['id'])) {
    include_once('conexao.php');

    $id = $_GET['id'];

    // Verifica se o registro existe antes de tentar excluir
    $sqlSelect = "SELECT * FROM sleventos WHERE id=$id";
    $resultSelect = $conexao->query($sqlSelect);

    if ($resultSelect->num_rows > 0) {
        // Exclui o registro
        $sqlDelete = "DELETE FROM sleventos WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);

        if ($resultDelete) {
            echo "Registro excluído com sucesso.";
        } else {
            echo "Erro ao excluir registro: " . $conexao->error;
        }
    } else {
        echo "Registro não encontrado.";
    }

    // Feche a conexão após as operações
    mysqli_close($conexao);
} else {
    echo "ID não fornecido.";
}

header('Location: tabela.php');
?>
