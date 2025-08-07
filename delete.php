<?php 

    include 'db.php';

    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM usuarios WHERE id = $id");
    header("Location: index.php"); // Redirect to the list page after deletion

?>