<?php
include 'db.php';

$result = mysqli_query($conn, "SELECT * FROM usuarios");
?>

<h2>Usuários</h2>
<a href="create.php">Adicionar novo usuário</a>

<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Ações</th>
  </tr>

  <?php if (mysqli_num_rows($result) > 0): ?>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nome'] ?></td>
        <td><?= $row['email'] ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>">Editar</a> |
          <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
        </td>
      </tr>
    <?php endwhile; ?>
  <?php else: ?>
      <tr>
        <td colspan="4">Nenhum usuário encontrado.</td>
      </tr>
  <?php endif; ?>
</table>
