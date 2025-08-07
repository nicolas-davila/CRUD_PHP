<?php 

    include 'db.php'; // Include the database connection file

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')"; // usuarios  = nome da tabela
        mysqli_query($conn, $sql);
        header ("Location: index.php"); // Redireciona para a página de listagem após inserir

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create usuário</title>
</head>
<body>
    <header><h1>Adicionar usuários</h1></header>

    <form method="post">
        Nome: <input type="text" name="nome" required>
        Email: <input type="email" name="email" required>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>