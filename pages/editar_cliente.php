<?php
include('../includes/database.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos del cliente
    $stmt = $conn->prepare("SELECT * FROM clientes WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $cliente = $result->fetch_assoc();
    $stmt->close();
}
?>

<!-- Formulario de edición -->
<form action="actualizar_cliente.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
    <!-- Campos del formulario como tipo_documento, numero_documento, etc. -->
</form>
