


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com formularios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Nome para orçamento</h1>
        
    </header>
    <section>

    <form action="cad.php" method="post">
      <label for="idnome">Nome</label>
      <input type="text"name="nome" id="idnome">
      <label for="idtelefone">Numero de telefone</label>
      <input type="text" name="telefone" id="idtelefone">
      <label for="idemail">email</label>
       <input type="text"name="email" id="idemail"> 
       <textarea name="comentario" id="idcomentario" cols="50" rows="10">Comentarios</textarea>
       <input type="submit" value="Enviar">
    </form>




    </section>
    
    
</body>
</html>