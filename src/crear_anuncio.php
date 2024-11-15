<?php include '../include/header.php' ?>

<main class="py-8 px-4">
    <h2 class="text-xl font-semibold mb-6">Crear un nuevo anuncio</h2>

    <form method="POST" action="crear_anuncio.php" enctype="multipart/form-data">
        <div class="mb-4">
            <label for="titulo" class="block text-lg font-medium">Título</label>
            <input type="text" id="titulo" name="titulo" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label for="descripcion" class="block text-lg font-medium">Descripción</label>
            <textarea id="descripcion" name="descripcion" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required></textarea>
        </div>

        <div class="mb-4">
            <label for="precio" class="block text-lg font-medium">Precio</label>
            <input type="number" id="precio" name="precio" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label for="imagen_url" class="block text-lg font-medium">Imagen Principal</label>
            <input type="file" id="imagen_url" name="imagen_url" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label for="imagen_1" class="block text-lg font-medium">Imagen Característica 1</label>
            <input type="file" id="imagen_1" name="imagen_1" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <div class="mb-4">
            <label for="imagen_2" class="block text-lg font-medium">Imagen Característica 2</label>
            <input type="file" id="imagen_2" name="imagen_2" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <div class="mb-4">
            <label for="imagen_3" class="block text-lg font-medium">Imagen Característica 3</label>
            <input type="file" id="imagen_3" name="imagen_3" class="w-full px-4 py-2 border border-gray-300 rounded-lg">
        </div>

        <button type="submit" name="submit" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 transition">
            Crear Anuncio
        </button>
    </form>
</main>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../conexion/conexion.php';

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    
    // Subir las imágenes
    $imagen_url = 'uploads/' . $_FILES['imagen_url']['name'];
    move_uploaded_file($_FILES['imagen_url']['tmp_name'], '../uploads/' . $_FILES['imagen_url']['name']);

    $imagen_1 = 'uploads/' . $_FILES['imagen_1']['name'];
    if (isset($_FILES['imagen_1'])) move_uploaded_file($_FILES['imagen_1']['tmp_name'], '../uploads/' . $_FILES['imagen_1']['name']);
    
    $imagen_2 = 'uploads/' . $_FILES['imagen_2']['name'];
    if (isset($_FILES['imagen_2'])) move_uploaded_file($_FILES['imagen_2']['tmp_name'], '../uploads/' . $_FILES['imagen_2']['name']);
    
    $imagen_3 = 'uploads/' . $_FILES['imagen_3']['name'];
    if (isset($_FILES['imagen_3'])) move_uploaded_file($_FILES['imagen_3']['tmp_name'], '../uploads/' . $_FILES['imagen_3']['name']);
    
    // Insertar anuncio en la base de datos
    $sql = "INSERT INTO anuncios (titulo, descripcion, precio, imagen_url, imagen_1, imagen_2, imagen_3)
            VALUES ('$titulo', '$descripcion', '$precio', '$imagen_url', '$imagen_1', '$imagen_2', '$imagen_3')";
    mysqli_query($conexion, $sql);

    echo '<p class="text-green-500">¡Anuncio creado exitosamente!</p>';
    mysqli_close($conexion);
}
?>

<?php include '../include/footer.php' ?>
