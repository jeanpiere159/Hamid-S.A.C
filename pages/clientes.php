<?php
    // Detectamos la página actual
    $current_page = basename($_SERVER['PHP_SELF']);
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <script>
        // Función para abrir el modal
        function openModal() {
            document.getElementById('modalCrearCliente').classList.remove('hidden');
        }

        // Función para cerrar el modal
        function closeModal() {
            document.getElementById('modalCrearCliente').classList.add('hidden');
        }
    </script>
</head>
<body class="h-screen bg-gray-50">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-1/6 relative text-white flex flex-col items-center">
            <!-- Logo -->
            <div class="mt-4 mb-8">
                <img src="/assets/images/logov1-.png" alt="HAMID S.A.C" class="h-24 w-auto">
            </div>

            <!-- Imagen de fondo que cubre toda la altura excepto la parte superior -->
            <div class="absolute inset-0 top-32 w-full h-full">
                <img src="/assets/images/bar.png" alt="Sidebar Background" class="object-cover h-full w-full">
            </div>

            <!-- Menu (Perfil, Clientes, Portafolio) -->
            <nav class="relative z-10 flex-1 w-full px-6 mt-16">
                <ul class="space-y-6">
                    <!-- Botón Perfil -->
                    <li>
                        <button class="flex items-center w-full text-sm text-white p-2 rounded-md 
                            <?php echo ($current_page == 'home.php') ? 'bg-indigo-600' : 'hover:bg-indigo-600'; ?>" 
                            onclick="window.location.href='/pages/home.php'">
                            <img src="/assets/images/perfil-ico.png" alt="Perfil" class="h-5 w-5 mr-2">
                            <span>Perfil</span>
                        </button>
                    </li>
                    
                    <!-- Botón Clientes -->
                    <li>
                        <button class="flex items-center w-full text-sm text-white p-2 rounded-md 
                            <?php echo ($current_page == 'clientes.php') ? 'bg-indigo-600' : 'hover:bg-indigo-600'; ?>" 
                            onclick="window.location.href='/pages/clientes.php'">
                            <img src="/assets/images/pack-ico.png" alt="Clientes" class="h-5 w-5 mr-2">
                            <span>Clientes</span>
                        </button>
                    </li>

                    <!-- Botón Portafolio -->
                    <li>
                        <button class="flex items-center w-full text-sm text-white p-2 rounded-md 
                            <?php echo ($current_page == 'portafolio.php') ? 'bg-indigo-600' : 'hover:bg-indigo-600'; ?>" 
                            onclick="window.location.href='/pages/portafolio.php'">
                            <img src="/assets/images/portafolio.png" alt="Portafolio" class="h-5 w-5 mr-2">
                            <span>Portafolio</span>
                        </button>
                    </li>
                </ul>
            </nav>

            <!-- Botón Cerrar Sesión -->
            <div class="relative z-10 w-full px-6 top-24">
                <button class="flex items-center w-full text-sm text-white hover:bg-indigo-600 p-2 rounded-md">
                    <img src="/assets/images/session-Leave.png" alt="Cerrar Sesión" class="h-5 w-5 mr-2">
                    <span>Cerrar Sesión</span>
                </button>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-10">
            <header class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-indigo-700">Hola, Vicente Ñañez</h1>
                    <p class="text-gray-600">Nos alegra verte otra vez.</p>
                </div>
                <!-- User Profile -->
                <div class="flex items-center">
                    <img src="/assets/images/perfil.png" alt="User Avatar" class="h-10 w-10 rounded-full mr-3">
                    <div>
                        <p class="font-bold text-gray-700">Vicente Ñañez</p>
                        <p class="text-sm text-gray-500">Administrador Corporativo</p>
                    </div>
                </div>
            </header>
            <div class="mt-16">
                <div class="flex justify-between mb-6">
                    <button class="bg-green-500 text-white px-4 py-2 rounded-md" onclick="openModal()">
                        + Crear
                    </button>
                    <div class="relative">
                        <input type="text" placeholder="Buscar..." class="pl-10 pr-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <img src="../assets/images/Search.png" alt="Buscar" class="h-5 w-5 text-gray-400">
                        </span>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md ml-4">
                            <img src="../assets/images/actualizar.png" alt="Actualizar" class="h-5 w-5">
                        </button>
                    </div>
                </div>

                <!-- Tabla de Clientes -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-transparent rounded-lg shadow-md">
                        <thead>
                            <tr class="text-left">
                                <th class="p-4 border-b-2 border-dashed border-gray-300">Item</th>
                                <th class="p-4 border-b-2 border-dashed border-gray-300">Tipo de Doc.</th>
                                <th class="p-4 border-b-2 border-dashed border-gray-300">N° de Doc.</th>
                                <th class="p-4 border-b-2 border-dashed border-gray-300">Nombres</th>
                                <th class="p-4 border-b-2 border-dashed border-gray-300">Apellidos completos</th>
                                <th class="p-4 border-b-2 border-dashed border-gray-300">Detalles</th>
                                <th class="p-4 border-b-2 border-dashed border-gray-300">Eliminar</th>
                                <th class="p-4 border-b-2 border-dashed border-gray-300">Editar</th>
                                <th class="p-4 border-b-2 border-dashed border-gray-300">Qr</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        include('../includes/database.php');
                        
                        // Consulta para obtener los clientes
                        $sql = "SELECT * FROM clientes";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td class='p-4'>" . $row['id'] . "</td>";
                                echo "<td class='p-4'>" . $row['tipo_documento'] . "</td>";
                                echo "<td class='p-4'>" . $row['numero_documento'] . "</td>";
                                echo "<td class='p-4'>" . $row['nombres'] . "</td>";
                                echo "<td class='p-4'>" . $row['apellidos'] . "</td>";
                                echo "<td class='p-4'><a href='ver_detalles.php?id=" . $row['id'] . "'><img src='../assets/images/ver_detalles.png' alt='Ver Detalles' class='h-7 w-22 inline'></a></td>";
                                echo "<td class='p-4'><a href='eliminar_cliente.php?id=" . $row['id'] . "'><img src='../assets/images/eliminar.png' alt='Eliminar' class='h-7 w-22 inline'></a></td>";
                                echo "<td class='p-4'><a href='editar_cliente.php?id=" . $row['id'] . "'><img src='../assets/images/editar.png' alt='Editar' class='h-10 w-10 inline'></a></td>";
                                echo "<td class='p-4'><img src='" . $row['qr_code_path'] . "' alt='QR Code' class='h-16 w-16'></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='9' class='text-center p-4'>No hay clientes aún</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal para Crear Cliente -->
    <div id="modalCrearCliente" class="fixed inset-0 bg-gray-800 bg-opacity-30 flex justify-center items-center z-50 hidden">
        <div class="bg-white rounded-lg p-6 w-96 relative shadow-lg">
            <button
                class="absolute top-4 right-4 text-gray-500 hover:text-gray-800"
                onclick="closeModal()"
            >
                &times;
            </button>

            <div class="flex items-center mb-6">
                <img src="../assets/images/Group 1920.png" alt="Crear Icon" class="h-6 w-6 mr-5" />
                <h2 class="text-indigo-600 text-xl font-bold">Crear Clientes</h2>
            </div>
            <p class="text-gray-500 mb-4">
                En esta sección usted puede registrar sus datos para gestionar a sus postulantes.
            </p>

            <form action="clientes.php" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="block text-sm text-gray-700">Tipo de Documento</label>
                    <select name="tipo_documento" class="w-full px-4 py-2 border rounded-md" required>
                        <option value="DNI">DNI</option>
                        <option value="RUC">RUC</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-sm text-gray-700">Número de Documento</label>
                    <input type="text" name="numero_documento" class="w-full px-4 py-2 border rounded-md" placeholder="Número de Documento" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm text-gray-700">Nombres Completos</label>
                    <input type="text" name="nombres" class="w-full px-4 py-2 border rounded-md" placeholder="Nombres" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm text-gray-700">Apellidos Completos</label>
                    <input type="text" name="apellidos" class="w-full px-4 py-2 border rounded-md" placeholder="Apellidos" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm text-gray-700">Correo Electrónico</label>
                    <input type="email" name="correo" class="w-full px-4 py-2 border rounded-md" placeholder="Correo" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm text-gray-700">Número de Celular</label>
                    <input type="text" name="telefono" class="w-full px-4 py-2 border rounded-md" placeholder="Número Celular" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm text-gray-700">Dirección</label>
                    <input type="text" name="direccion" class="w-full px-4 py-2 border rounded-md" placeholder="Dirección" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm text-gray-700">Adjuntar PDF</label>
                    <input type="file" name="pdf" class="border border-gray-300 rounded-md p-4 w-full h-24 bg-indigo-100" required>
                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md shadow hover:bg-indigo-700 transition duration-200">
                        Crear Cliente
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
include('../includes/phpqrcode/qrlib.php');
include('../includes/database.php');

// Directorios
$target_dir = "../uploads/";
$qr_dir = "../qrcodes/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tipo_documento = $_POST['tipo_documento'];
    $numero_documento = $_POST['numero_documento'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    // Manejar el archivo PDF
    $pdf_file = $target_dir . basename($_FILES["pdf"]["name"]);
    $pdfFileType = strtolower(pathinfo($pdf_file, PATHINFO_EXTENSION));

    if ($pdfFileType != "pdf") {
        echo "Error: Solo se permiten archivos PDF.";
        exit();
    }

    // Subir el archivo PDF
    if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $pdf_file)) {
        // Generar el código QR asociado al PDF
        $qr_code_path = $qr_dir . $numero_documento . '.png';
        QRcode::png($pdf_file, $qr_code_path);

        // Guardar los datos en la base de datos
        $stmt = $conn->prepare("INSERT INTO clientes (tipo_documento, numero_documento, nombres, apellidos, correo, telefono, direccion, pdf_path, qr_code_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $tipo_documento, $numero_documento, $nombres, $apellidos, $correo, $telefono, $direccion, $pdf_file, $qr_code_path);
        $stmt->execute();
        $stmt->close();

        echo "Cliente creado exitosamente. <a href='$qr_code_path'>Ver QR</a>";
    } else {
        echo "Error al subir el archivo PDF.";
    }
}
?>
