<?php
include('../includes/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['numero_documento'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];

    // Actualizar los datos del cliente
    $stmt = $conn->prepare("UPDATE clientes SET tipo_documento=?, numero_documento=?, nombres=?, apellidos=? WHERE id=?");
    $stmt->bind_param("ssssi", $tipo_documento, $numero_documento, $nombres, $apellidos, $id);
    $stmt->execute();
    $stmt->close();

    // Redirigir a la página de clientes
    header("Location: clientes.php");
}
?>
