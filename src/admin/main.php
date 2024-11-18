<?php 
include './head.php'; 
include '../../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario
    $moto = $_POST['moto'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $kilometraje = $_POST['kilometraje'];
    $estado = $_POST['estado'];
    $color = $_POST['color'];
    $cilindraje = $_POST['cilindraje'];

    // Manejo de la imagen principal
    $imagen_principal = '';
    if (isset($_FILES['imagen_principal']) && $_FILES['imagen_principal']['error'] === 0) {
        $imagen_principal = $_FILES['imagen_principal'];
        $imagen_principal_name = 'imagen_principal_' . time() . '_' . basename($imagen_principal['name']);
        $imagen_principal_path = './upload/' . $imagen_principal_name;

        // Mover la imagen a la carpeta de destino
        if (move_uploaded_file($imagen_principal['tmp_name'], $imagen_principal_path)) {
            // Si la imagen se guarda correctamente, almacenamos el nombre
            $imagen_principal = $imagen_principal_name;
        } else {
            echo '<p class="text-red-500">Error al cargar la imagen principal.</p>';
            exit(); // Detener ejecución si la imagen no se cargó correctamente
        }
    }

    // Manejo de las imágenes de características
    $imagenes_caracteristicas = [];
    for ($i = 1; $i <= 3; $i++) {
        if (isset($_FILES["imagen_caracteristica$i"]) && $_FILES["imagen_caracteristica$i"]['error'] === 0) {
            $imagen_caracteristica = $_FILES["imagen_caracteristica$i"];
            $imagen_caracteristica_name = 'imagen_caracteristica' . $i . '_' . time() . '_' . basename($imagen_caracteristica['name']);
            $imagen_caracteristica_path = './upload/' . $imagen_caracteristica_name;

            // Mover la imagen a la carpeta de destino
            if (move_uploaded_file($imagen_caracteristica['tmp_name'], $imagen_caracteristica_path)) {
                $imagenes_caracteristicas[] = $imagen_caracteristica_name;
            } else {
                echo '<p class="text-red-500">Error al cargar la imagen de característica ' . $i . '.</p>';
                exit(); // Detener ejecución si alguna imagen de característica no se carga
            }
        }
    }

    // Insertar anuncio en la base de datos
    $sql = "INSERT INTO anuncios (moto, marca, modelo, precio, kilometraje, estado, color, cilindraje, imagen_principal, imagen_caracteristica1, imagen_caracteristica2, imagen_caracteristica3)
            VALUES ('$moto', '$marca', '$modelo', '$precio', '$kilometraje', '$estado', '$color', '$cilindraje', 
                    '$imagen_principal', 
                    '" . (isset($imagenes_caracteristicas[0]) ? $imagenes_caracteristicas[0] : '') . "', 
                    '" . (isset($imagenes_caracteristicas[1]) ? $imagenes_caracteristicas[1] : '') . "', 
                    '" . (isset($imagenes_caracteristicas[2]) ? $imagenes_caracteristicas[2] : '') . "')";
    
    if (mysqli_query($conexion, $sql)) {
        // Redirigir a la misma página para recargar los datos
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();  // Importante: termina la ejecución del script
    } else {
        echo '<p class="text-red-500">Error al crear el anuncio: ' . mysqli_error($conexion) . '</p>';
    }

    mysqli_close($conexion);
}

?>

<h1 class="text-center font-bold uppercase mt-5 text-3xl text-gray-800">Administración Motoya</h1>

<div class="w-5/6 mx-auto mt-10">
    <button href="#" popovertarget="my-popover" class="inline-block bg-blue-500 text-white font-medium py-2 px-4 rounded hover:bg-blue-600 transition">
        Crear nueva publicación
    </button>
    <div class="overflow-x-auto">
        <table class="w-full mt-5 border-collapse border border-gray-300 text-left">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-gray-600 font-medium">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-600 font-medium">Moto</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-600 font-medium">Marca</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-600 font-medium">Modelo</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-600 font-medium">Precio</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-600 font-medium">Km</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-600 font-medium">Estado</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-600 font-medium">Color</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-600 font-medium">Cilindraje</th>
                    <th class="border border-gray-300 px-4 py-2 text-gray-600 font-medium">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require '../../conexion/conexion.php';
                $sql = "SELECT * FROM anuncios";
                $result = mysqli_query($conexion, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr class="hover:bg-gray-100">';
                        echo '<td class="border border-gray-300 px-4 py-2">' . $row['id'] . '</td>';
                        echo '<td class="border border-gray-300 px-4 py-2">' . htmlspecialchars($row['moto']) . '</td>';
                        echo '<td class="border border-gray-300 px-4 py-2">' . htmlspecialchars($row['marca']) . '</td>';
                        echo '<td class="border border-gray-300 px-4 py-2">' . htmlspecialchars($row['modelo']) . '</td>';
                        echo '<td class="border border-gray-300 px-4 py-2">$' . number_format($row['precio'], 2) . '</td>';
                        echo '<td class="border border-gray-300 px-4 py-2">' . number_format($row['kilometraje']) . '</td>';
                        echo '<td class="border border-gray-300 px-4 py-2">' . htmlspecialchars($row['estado']) . '</td>';
                        echo '<td class="border border-gray-300 px-4 py-2">' . htmlspecialchars($row['color']) . '</td>';
                        echo '<td class="border border-gray-300 px-4 py-2">' . htmlspecialchars($row['cilindraje']) . '</td>';
                        echo '<td class="border border-gray-300 px-4 py-2">
                                <div class="flex gap-2">
                                    <a href="./crud/update.php?id=' . $row['id'] . '" class="text-blue-500 hover:text-blue-700">Actualizar</a>
                                    <form method="POST" action="./crud/delete.php" style="display:inline;">
                                        <input type="hidden" name="id" value="' . $row['id'] . '">
                                        <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button>
                                    </form>
                                </div>
                              </td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="10" class="text-center border border-gray-300 px-4 py-2">No hay anuncios disponibles.</td></tr>';
                }
                mysqli_close($conexion);
                ?>
            </tbody>
        </table>
    </div>
</div>

<main class="py-8 px-4 bg-gray-300 rounded" id="my-popover" popover>
    <h2 class="text-xl font-semibold mb-6">Crear un nuevo anuncio</h2>
    <form method="POST" enctype="multipart/form-data">
    <div class="grid grid-cols-3">
        <div class="mb-4">
            <label for="moto" class="block text-lg font-medium">Moto</label>
            <input type="text" id="moto" name="moto" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="marca" class="block text-lg font-medium">Marca</label>
            <input type="text" id="marca" name="marca" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="modelo" class="block text-lg font-medium">Modelo</label>
            <input type="text" id="modelo" name="modelo" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="precio" class="block text-lg font-medium">Precio</label>
            <input type="number" id="precio" name="precio" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="kilometraje" class="block text-lg font-medium">Kilometraje</label>
            <input type="number" id="kilometraje" name="kilometraje" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="estado" class="block text-lg font-medium">Estado</label>
            <input type="text" id="estado" name="estado" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="color" class="block text-lg font-medium">Color</label>
            <input type="text" id="color" name="color" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="cilindraje" class="block text-lg font-medium">Cilindraje</label>
            <input type="text" id="cilindraje" name="cilindraje" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>

        <!-- Campo para la imagen principal -->
        <div class="mb-4">
            <label for="imagen_principal" class="block text-lg font-medium">Imagen Principal</label>
            <input type="file" id="imagen_principal" name="imagen_principal" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required accept="image/*">
        </div>

        <!-- Campos para las imágenes de características -->
        <div class="mb-4">
            <label for="imagen_caracteristica1" class="block text-lg font-medium">Imagen Característica 1</label>
            <input type="file" id="imagen_caracteristica1" name="imagen_caracteristica1" class="w-full px-4 py-2 border border-gray-300 rounded-lg" accept="image/*">
        </div>

        <div class="mb-4">
            <label for="imagen_caracteristica2" class="block text-lg font-medium">Imagen Característica 2</label>
            <input type="file" id="imagen_caracteristica2" name="imagen_caracteristica2" class="w-full px-4 py-2 border border-gray-300 rounded-lg" accept="image/*">
        </div>

        <div class="mb-4">
            <label for="imagen_caracteristica3" class="block text-lg font-medium">Imagen Característica 3</label>
            <input type="file" id="imagen_caracteristica3" name="imagen_caracteristica3" class="w-full px-4 py-2 border border-gray-300 rounded-lg" accept="image/*">
        </div>
    </div>

    <button type="submit" name="submit" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 transition">
        Crear Anuncio
    </button>
</form>

</main>

<?php include './footer.php'; ?>
