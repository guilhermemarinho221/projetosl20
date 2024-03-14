<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Adicionar Registro</h2>
    <form action="processar_adicao.php" method="post">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="text" name="email" required><br>
        Telefone: <input type="text" name="telefone" required><br>
        <input type="submit" value="Adicionar">
        <textarea name="comentarios" id="idcomentarios" cols="50" rows="5">Comentarios</textarea>
    </form>
    <a href="tabela.php">Voltar para a Tabela</a>
</body>
</html>
