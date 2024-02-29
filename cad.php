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
        $n = $_GET["nome"]  ?? "Sem nome";
        $s = $_GET["sobrenome"]  ?? "Sem sobrenome";
        echo "Bem vindo é um prazer , <strong>$n </strong>$s! Saudações SL eventos";

        ?>
        <P><a href="index.html">Voltar para pagina anterior</a></P>
    </main>
    
</body>
</html>