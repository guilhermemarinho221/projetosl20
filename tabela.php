<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="style.css">
    <!-- Adicione um link para um ícone de exclusão (usando FontAwesome como exemplo) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once('conexao.php');
            $query = "SELECT * FROM sleventos";
            $result = mysqli_query($conexao, $query);

            if ($result) {
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['nome'] . "</td>";
                    echo "<td>" . $user_data['email'] . "</td>";
                    echo "<td>" . $user_data['telefone'] . "</td>";
                   
                    echo '<td>
                            <a href="editar.php?id=' . $user_data['id'] . '"><i class="fas fa-edit"></i></a>
                            <a href="excluir.php?id=' . $user_data['id'] . '" onclick="return confirm(\'Você tem certeza que deseja excluir este registro?\')"><i class="fas fa-trash"></i></a>
                        </td>';
                    echo "</tr>";
                }
            } else {
                echo "Erro na consulta: " . mysqli_error($conexao);
            }

            mysqli_close($conexao);
            ?>
        </tbody>
    </table>
    <a href="adicionar.php">Adicionar Registro</a>
</body>
</html>


