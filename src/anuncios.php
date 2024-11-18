<?php include '../include/header.php' ?>

<main class="py-8 px-4">

    <!-- Mostrar anuncios desde la base de datos -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php
require '../conexion/conexion.php';

// Consulta para obtener los anuncios desde la base de datos
$sql = "SELECT * FROM anuncios ORDER BY id DESC";
$result = mysqli_query($conexion, $sql);

// Mostrar anuncios
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div>
                <!-- Imagen principal -->
                <img class="w-full h-48 object-cover" src="./admin/upload/' . $row['imagen_principal'] . '" alt="Imagen principal del anuncio">
            </div>
            <div class="p-4">
                <h3 class="text-xl font-semibold">' . htmlspecialchars($row['moto']) . ' - ' . htmlspecialchars($row['marca']) . ' ' . htmlspecialchars($row['modelo']) . '</h3>
                <p class="text-gray-600">' . htmlspecialchars($row['estado']) . '</p>
                <p class="text-lg font-bold text-red-600">$' . number_format($row['precio'], 2) . '</p>
                <ul class="mt-4 flex flex-wrap justify-between">
                    <li class="flex items-center space-x-2 cursor-pointer">
                        <!-- Característica 1 -->
                        <a href="#" class="flex items-center">
                            <img class="w-32 h-20 object-cover" src="./admin/upload/' . $row['imagen_caracteristica1'] . '" alt="Característica 1">
                            <p class="ml-2">Característica 1</p>
                        </a>
                    </li>
                    <li class="flex items-center space-x-2 cursor-pointer">
                        <!-- Característica 2 -->
                        <a href="#" class="flex items-center">
                            <img class="w-32 h-20 object-cover" src="./admin/upload/' . $row['imagen_caracteristica2'] . '" alt="Característica 2">
                            <p class="ml-2">Característica 2</p>
                        </a>
                    </li>
                    <li class="flex items-center space-x-2 cursor-pointer">
                        <!-- Característica 3 -->
                        <a href="#" class="flex items-center">
                            <img class="w-32 h-20 object-cover" src="./admin/upload/' . $row['imagen_caracteristica3'] . '" alt="Característica 3">
                            <p class="ml-2">Característica 3</p>
                        </a>
                    </li>
                </ul>
                <!-- Enlace a la página de la moto -->
                <a href="./moto.php?id=' . $row['id'] . '" class="block mt-4 text-center bg-orange-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-orange-600 transition">
                    Ver moto
                </a>
            </div>
        </div>
        ';
    }
} else {
    echo '<p>No hay anuncios disponibles en este momento.</p>';
}

mysqli_close($conexion);
?>

    </div>
</main>

<?php include '../include/footer.php' ?>
