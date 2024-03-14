<?php
include_once('conexao.php');

// Verifica se a requisição foi do tipo POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se os campos do formulário foram definidos e não estão vazios
    if (isset($_POST['nome'], $_POST['email'], $_POST['telefone'])) {
        $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
        $comentario = isset($_POST['comentarios']) ? mysqli_real_escape_string($conexao, $_POST['comentarios']) : '';

        // Verifica se a conexão com o banco de dados foi estabelecida
        if ($conexao) {
            $result = mysqli_query($conexao, "INSERT INTO sleventos(nome, email, telefone, comentarios) VALUES('$nome', '$email', '$telefone', '$comentario')");

            if ($result) {
                //echo "Registro inserido com sucesso.";
            } else {
                echo "Erro ao inserir registro: " . mysqli_error($conexao);
            }
        } else {
            echo "Erro na conexão com o banco de dados.";
        }
    } else {
        echo "Erro: Todos os campos obrigatórios do formulário devem ser preenchidos.";
    }
} else {
    echo "Erro: Método de requisição inválido.";
}

// Fecha a conexão após as operações
$conexao->close();
  $sql = "SELECT * FROM sleventos ORDER BY id DESC";
 
?>


<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>resultado do processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_POST["nome"]  ?? "Sem nome";  
        $telefone = $_POST["telefone"]  ?? "Sem sobrenome";
        $email = $_POST["email"] ?? "Sem email";
        echo "Bem vindo é um prazer , <strong> $nome Saudações de SL eventos";

        ?>
        <P><a href="cads.html">Voltar para pagina anterior</a></P>
    </main>
    
</body>
</html>