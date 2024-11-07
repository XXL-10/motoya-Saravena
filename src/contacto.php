<?php include '../include/header.php' ?>

<main class="flex justify-center items-center min-h-screen bg-gray-100 py-8">
  <form class="bg-white p-8 rounded-lg shadow-lg ring-2 ring-orange-300 w-full max-w-lg" method="POST" action="">
    <fieldset>
      <legend class="text-2xl font-semibold text-gray-700 mb-6 text-center">Digite todos sus datos</legend>
      <div class="space-y-6">
        <div>
          <label for="nombre" class="block text-gray-600 font-medium mb-2">Nombre</label>
          <input type="text" id="nombre" name="nombre" placeholder="Digite nombre completo"
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500" required autofocus />
        </div>
        <div>
          <label for="telefono" class="block text-gray-600 font-medium mb-2">Teléfono</label>
          <input type="number" id="telefono" name="telefono" placeholder="+573#########"
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500" required />
        </div>
        <div>
          <label for="email" class="block text-gray-600 font-medium mb-2">Email</label>
          <input type="email" id="email" name="email" placeholder="correo@correo.com"
                 class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500" required />
        </div>
        <div>
          <label for="men" class="block text-gray-600 font-medium mb-2">Mensaje</label>
          <textarea name="mensaje" id="men" rows="4"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-orange-500"
                    placeholder="Escribe tu mensaje aquí..."></textarea>
        </div>
        <input type="submit" value="Enviar" class="w-full bg-orange-600 text-white py-2 rounded-lg font-semibold hover:bg-orange-700 transition duration-200" />
      </div>
    </fieldset>
  </form>
</main>

<?php
require '../conexion/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $sql = "INSERT INTO contactos (nombre, telefono, email, mensaje) VALUES ('$nombre', '$telefono', '$email', '$mensaje')";
    $result_check = mysqli_query($conexion, $sql);

    if ($result_check) {
        echo "<script>alert('Usuario registrado exitosamente.'); window.location.href = 'contacto.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
}
include '../include/footer.php';
?>
