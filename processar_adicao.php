<?php
// Verifica se todos os campos foram enviados pelo formulário
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone'])) {
    // Inclui o arquivo de conexão
    include_once('conexao.php');

    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $comentario = $_POST['comentarios'];

    // Query SQL para inserir os dados na tabela
    $sqlInsert = "INSERT INTO sleventos (nome, email, telefone, comentarios) VALUES ('$nome', '$email', '$telefone','$comentario')";

    // Executa a query
    if (mysqli_query($conexao, $sqlInsert)) {
        echo "Registro adicionado com sucesso.";
    } else {
        echo "Erro ao adicionar registro: " . mysqli_error($conexao);
    }

    // Fecha a conexão
    mysqli_close($conexao);
} else {
    echo "Todos os campos devem ser preenchidos.";
}

// Redireciona de volta para a página de tabela
header('Location: tabela.php');
?>
