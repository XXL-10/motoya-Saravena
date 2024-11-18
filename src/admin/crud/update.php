
<script src="https://cdn.tailwindcss.com"></script>

<?php
require '../../../conexion/conexion.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos del anuncio
    $sql = "SELECT * FROM anuncios WHERE id = $id";
    $result = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "Anuncio no encontrado.";
        exit;
    }

    // Aquí puedes crear el formulario para editar los datos del anuncio, por ejemplo:
    ?>
  <form method="POST" class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg space-y-4">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <!-- Moto -->
    <div>
        <label for="moto" class="block text-gray-700 font-semibold">Moto</label>
        <input type="text" name="moto" id="moto" value="<?php echo htmlspecialchars($row['moto']); ?>" 
               required class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Marca -->
    <div>
        <label for="marca" class="block text-gray-700 font-semibold">Marca</label>
        <input type="text" name="marca" id="marca" value="<?php echo htmlspecialchars($row['marca']); ?>" 
               required class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Modelo -->
    <div>
        <label for="modelo" class="block text-gray-700 font-semibold">Modelo</label>
        <input type="text" name="modelo" id="modelo" value="<?php echo htmlspecialchars($row['modelo']); ?>" 
               required class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Precio -->
    <div>
        <label for="precio" class="block text-gray-700 font-semibold">Precio</label>
        <input type="number" name="precio" id="precio" value="<?php echo $row['precio']; ?>" 
               required class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Kilometraje -->
    <div>
        <label for="kilometraje" class="block text-gray-700 font-semibold">Kilometraje</label>
        <input type="number" name="kilometraje" id="kilometraje" value="<?php echo $row['kilometraje']; ?>" 
               required class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Estado -->
    <div>
        <label for="estado" class="block text-gray-700 font-semibold">Estado</label>
        <input type="text" name="estado" id="estado" value="<?php echo htmlspecialchars($row['estado']); ?>" 
               required class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Color -->
    <div>
        <label for="color" class="block text-gray-700 font-semibold">Color</label>
        <input type="text" name="color" id="color" value="<?php echo htmlspecialchars($row['color']); ?>" 
               required class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Cilindraje -->
    <div>
        <label for="cilindraje" class="block text-gray-700 font-semibold">Cilindraje</label>
        <input type="text" name="cilindraje" id="cilindraje" value="<?php echo htmlspecialchars($row['cilindraje']); ?>" 
               required class="mt-2 w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>

    <!-- Submit Button -->
    <div>
        <button type="submit" class="w-full py-3 bg-blue-500 text-white font-semibold rounded-md shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Actualizar</button>
    </div>
</form>

    <?php
}




require '../../../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $moto = $_POST['moto'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $kilometraje = $_POST['kilometraje'];
    $estado = $_POST['estado'];
    $color = $_POST['color'];
    $cilindraje = $_POST['cilindraje'];

    // Actualizar el anuncio en la base de datos
    $sql = "UPDATE anuncios SET moto = '$moto', marca = '$marca', modelo = '$modelo', precio = '$precio', 
            kilometraje = '$kilometraje', estado = '$estado', color = '$color', cilindraje = '$cilindraje' 
            WHERE id = $id";

    if (mysqli_query($conexion, $sql)) {
        header("Location: ../main.php"); // Redirigir a la página principal después de actualizar
        exit();
    } else {
        echo "Error al actualizar el anuncio: " . mysqli_error($conexion);
    }
    mysqli_close($conexion);
}
?>
