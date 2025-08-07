<?php 

    include 'db.php';

    $id = $_GET['id']; // Get the user ID from the URL
    $result = mysqli_query($conn, "SELECT * FROM usuarios WHERE id = $id");
    $usuario = mysqli_fetch_assoc($result); // Pega os dados do usuário

    if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Método POST para atualizar
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        mysqli_query($conn, "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = $id");

        header("Location: index.php"); // Redirect to the list page after updating
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuário</title>
</head>
<body>
    <header><h1>Editar usuário</h1></header>
    <form method="post">
        Nome: <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required>
        Email: <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required>
        <input type="submit" value="Atualizar"> 
</body>
</html>