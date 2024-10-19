<?php
include('../includes/database.php');

// Verificamos si se pasó el 'id' del cliente en la URL
if (isset($_GET['id'])) {
    $cliente_id = $_GET['id'];

    // Consulta para obtener los datos del cliente por ID
    $stmt = $conn->prepare("SELECT * FROM clientes WHERE id = ?");
    $stmt->bind_param("i", $cliente_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Si el cliente existe, obtenemos sus datos
    if ($result->num_rows > 0) {
        $cliente = $result->fetch_assoc();
    } else {
        echo "Cliente no encontrado";
        exit();
    }
} else {
    echo "ID de cliente no proporcionado";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen bg-gray-50">

<div class="flex flex-col items-center justify-center h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-1/2">
        <h1 class="text-3xl font-bold mb-6 text-indigo-700">Detalles del Cliente</h1>

        <!-- Mostrar los detalles del cliente -->
        <p><strong>Tipo de Documento:</strong> <?php echo $cliente['tipo_documento']; ?></p>
        <p><strong>Número de Documento:</strong> <?php echo $cliente['numero_documento']; ?></p>
        <p><strong>Nombres:</strong> <?php echo $cliente['nombres']; ?></p>
        <p><strong>Apellidos:</strong> <?php echo $cliente['apellidos']; ?></p>
        <p><strong>Correo:</strong> <?php echo $cliente['correo']; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $cliente['telefono']; ?></p>
        <p><strong>Dirección:</strong> <?php echo $cliente['direccion']; ?></p>

        <!-- Mostrar el PDF subido con un enlace -->
        <p><strong>Documento PDF:</strong> <a href="<?php echo $cliente['pdf_path']; ?>" target="_blank" class="text-blue-500 hover:underline">Ver PDF</a></p>

        <!-- Mostrar el código QR generado -->
        <p><strong>Código QR:</strong></p>
        <img src="<?php echo $cliente['qr_code_path']; ?>" alt="QR Code" class="h-32 w-32">

        <!-- Botón para regresar -->
        <div class="mt-6">
            <a href="clientes.php" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Regresar</a>
        </div>
    </div>
</div>

</body>
</html>
