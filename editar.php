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

        // Consulta SQL para obter os dados do registro
        $sqlSelect = "SELECT * FROM sleventos WHERE id=$id";
        $resultSelect = $conexao->query($sqlSelect);

        if ($resultSelect->num_rows > 0) {
            $user_data = $resultSelect->fetch_assoc();
    ?>
            <form action="processar_atualizacao.php" method="post">
                <input type="hidden" name="id" value="<?php echo $user_data['id']; ?>">
                Nome: <input type="text" name="nome" value="<?php echo $user_data['nome']; ?>"><br>
                Email: <input type="text" name="email" value="<?php echo $user_data['email']; ?>"><br>
                Telefone: <input type="text" name="telefone" value="<?php echo $user_data['telefone']; ?>"><br>
                Comentário: <textarea name="comentario"><?php echo $user_data['comentario']; ?></textarea><br>
                <input type="submit" value="Atualizar">
            </form>
    <?php
        } else {
            echo "Registro não encontrado.";
        }

        // Feche a conexão após as operações
        mysqli_close($conexao);
    } else {
        echo "ID não fornecido.";
    }
    ?>
</body>
</html>
