<?php
    // Detectamos la página actual
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
        </main>
    </div>

</body>
</html>
