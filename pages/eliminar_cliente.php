<?php
include('../includes/database.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el cliente
    $stmt = $conn->prepare("DELETE FROM clientes WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    // Redirigir a la página de clientes
    header("Location: clientes.php");
}
?>
